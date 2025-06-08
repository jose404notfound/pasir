<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();  // Ensure the user is authenticated

// CSRF verification: Ensure the request is POST and token is valid to prevent cross-site request forgery
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(["status" => "error", "message" => "Method not allowed."]));
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    die(json_encode(["status" => "error", "message" => "Invalid CSRF token."]));
}

$config = include($_SERVER['DOCUMENT_ROOT'].'/services/db/config.php');

// Create database connection using the configuration for blog_db
$conn_blog = new mysqli($config['blog']['host'], $config['blog']['username'], $config['blog']['password'], $config['blog']['dbname']);

if ($conn_blog->connect_error) {
    http_response_code(500);
    echo "Database connection error.";
    exit;
}

// Sanitize and validate inputs
$title = trim($_POST['title'] ?? '');
$content = $_POST['content'] ?? '';

// Ensure required fields are filled
if ($title === '' || $content === '') {
    http_response_code(400);
    echo "All fields are required.";
    exit;
}

// Get the username from session
$username = $_SESSION['username'];  // Assuming username is set when logged in

// Insert new blog entry into the database
$stmt = $conn_blog->prepare("INSERT INTO blog_entries (title, content, author_username) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $content, $username);

if ($stmt->execute()) {
    echo "Entry created successfully.";
} else {
    http_response_code(500);
    echo "Error creating entry: " . $stmt->error;
}

$stmt->close();
$conn_blog->close();
?>
