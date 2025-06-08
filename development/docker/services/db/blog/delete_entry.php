<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_admin_auth();  // Ensure the user is an administrator

// CSRF verification
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(["status" => "error", "message" => "Method not allowed."]));
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    die(json_encode(["status" => "error", "message" => "Invalid CSRF token."]));
}

$config = include($_SERVER['DOCUMENT_ROOT'].'/services/db/config.php');

// Create database connection using mysqli with credentials from config file
$conn_blog = new mysqli($config['blog']['host'], $config['blog']['username'], $config['blog']['password'], $config['blog']['dbname']);

if ($conn_blog->connect_error) {
    http_response_code(500);
    echo "Database connection error.";
    exit;
}

// Validate entry_id
if (!isset($_POST['entry_id']) || empty($_POST['entry_id'])) {
    http_response_code(400);
    echo "An entry ID is required.";
    exit;
}

$entry_id = $_POST['entry_id'];

// Delete the blog entry
    $stmt = $conn_blog->prepare("DELETE FROM blog_entries WHERE id = ?");
    $stmt->bind_param("i", $entry_id); 

// To ensure that the user is deleting their own entry, we can use the session username, but in this case, only admins can delete entries.
// $stmt = $conn_blog->prepare("DELETE FROM blog_entries WHERE id = ? AND author_username = ?");
// $stmt->bind_param("is", $entry_id, $_SESSION['username']); 

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Entry deleted successfully.";
} else {
    http_response_code(404);
    echo "Entry not found or already deleted.";
}

$stmt->close();
$conn_blog->close();
?>
