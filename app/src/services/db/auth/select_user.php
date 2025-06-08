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

// Query to fetch registered users
$sql = "SELECT username FROM users ORDER BY username ASC";
$result = $conn_auth->query($sql);

// Check if the query was successful
if (!$result) {
    http_response_code(500);
    echo "Error executing the query.";
    exit;
}

// Generate HTML output for user list
$output = '<h3>Registered users:</h3><ul>';
while ($row = $result->fetch_assoc()) {
    $output .= '<li>' . htmlspecialchars($row['username']) . '</li>';
}

$output .= '</ul>';

// Clean up prepared statements and close the database connection to free resources
$conn_auth->close();
echo $output;
?>
