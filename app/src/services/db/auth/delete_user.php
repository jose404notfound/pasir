<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_admin_auth();

// CSRF verification: Ensure the request is POST and token is valid to prevent cross-site request forgery
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(["status" => "error", "message" => "Method not allowed."]));
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    die(json_encode(["status" => "error", "message" => "Invalid CSRF token."]));
}

// Validate that the username field is set and not empty after trimming whitespace
if (!isset($_POST['username']) || empty(trim($_POST['username']))) {
    http_response_code(400);
    echo "A username is required.";
    exit;
}

$usernameToDelete = trim($_POST['username']);

// Prevent deletion of the main administrator user for security reasons
if ($usernameToDelete === 'jgonrui097') {
    http_response_code(403);
    echo "The administrator user cannot be deleted.";
    exit;
}

$config = include($_SERVER['DOCUMENT_ROOT'].'/services/db/config.php');

// Create database connection using mysqli with credentials from config file
// $conn = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
$conn_auth = new mysqli($config['auth']['host'], $config['auth']['username'], $config['auth']['password'], $config['auth']['dbname']);

// Check connection errors to avoid proceeding with invalid connection
if ($conn_auth->connect_error) {
    http_response_code(500);
    echo "Database connection error.";
    exit;
}

// Prepare the SQL statement to delete the user securely using parameterized queries
$stmt = $conn_auth->prepare("DELETE FROM users WHERE username = ?");
$stmt->bind_param("s", $usernameToDelete);
$stmt->execute();

// Check if the user was deleted successfully
if ($stmt->affected_rows > 0) {
    echo "User deleted successfully.";
} else {
    http_response_code(404);
    echo "User not found or already deleted.";
}

// Clean up prepared statements and close the database connection to free resources
$stmt->close();
$conn_auth->close();
?>
