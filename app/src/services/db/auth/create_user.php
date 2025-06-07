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

// Sanitize and validate inputs
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$password_confirm = $_POST['password_confirm'] ?? '';

// Ensure required fields are filled
if ($username === '' || $password === '' || $password_confirm === '') {
    http_response_code(400);
    echo "All fields are required.";
    exit;
}

// Check if passwords match before processing
if ($password !== $password_confirm) {
    http_response_code(400);
    echo "Passwords do not match.";
    exit;
}

// Prevent duplicate users by checking if username already exists in the database
$stmt = $conn_auth->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    http_response_code(409);
    $stmt->close();
    $conn->close();
    echo "User already exists.";
    exit;
}
$stmt->close();

// Hash the password securely before storing it to protect user credentials
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert new user with the hashed password
$stmt = $conn_auth->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

// Execute insertion and handle possible errors
if ($stmt->execute()) {
    echo "User created successfully.";
} else {
    http_response_code(500);
    echo "Error creating user: " . $stmt->error;
}

// Clean up prepared statements and close the database connection to free resources
$stmt->close();
$conn_auth->close();
?>
