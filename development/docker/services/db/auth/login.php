<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();

$config = include($_SERVER['DOCUMENT_ROOT'].'/services/db/config.php');

// Create database connection using mysqli with credentials from config file
$conn_auth = new mysqli($config['auth']['host'], $config['auth']['username'], $config['auth']['password'], $config['auth']['dbname']);

// Check connection errors to avoid proceeding with invalid connection
if ($conn_auth->connect_error) {
    error_log("Database connection error: " . $conn_auth->connect_error); // Log the error
    echo json_encode(["status" => "error", "message" => "Database connection error."]);
    exit;
}


// Only allow POST requests to this endpoint for security
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Method not allowed."]);
    exit;
}

// Decode JSON input from the request body
$data = json_decode(file_get_contents("php://input"), true);

// Validate that username and password are provided
if (!isset($data["username"]) || !isset($data["password"])) {
    echo json_encode(["status" => "error", "message" => "Username and password are required."]);
    exit;
}

$username = $data["username"];
$password = $data["password"];

// Prepare and execute a parameterized SQL query to fetch the hashed password
$stmt = $conn_auth->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists in the database
if ($result->num_rows === 0) {
    echo json_encode(["status" => "error", "message" => "User not found."]);
    $stmt->close();
    $conn_auth->close();
    exit;
}

// Fetch the hashed password from the result set
$row = $result->fetch_assoc();
$hashedPassword = $row['password'];

// Verify the provided password against the hashed password
if (password_verify($password, $hashedPassword)) {
    login_user($username); // Use secure login function from auth_functions.php and set user ID in session
    
    // Return error JSON response with success status and redirect URL
    echo json_encode(["status" => "success", "message" => "Authentication successful.", "redirect" => "/home"]);
} else {
    // Return error JSON response for incorrect password
    echo json_encode(["status" => "error", "message" => "Incorrect password."]);
}

// Clean up prepared statements and close the database connection to free resources
$stmt->close();
$conn_auth->close();
?>