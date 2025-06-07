<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();

# secure_logout(); // Simple version without CSRF

// PRODUCTION VERSION (Requires POST method with CSRF)
// Obligatory CSRF verification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_POST['csrf_token']) && 
    $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    
    // Secure logout function from auth_functions.php
    secure_logout();
    
    // Redirect with optional success message
    header("Location: /welcome?message=logout_success");
    exit;
} else {
    // Log the invalid logout attempt
    error_log("Invalid logout attempt - Método: ".$_SERVER['REQUEST_METHOD']);
    
    // Redirect with an error message
    header("Location: /home?error=invalid_logout");
    exit;
}
?>