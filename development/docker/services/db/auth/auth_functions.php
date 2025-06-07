<?php
function secure_session_start() {
    $session_name = 'secure_session_id';
    
    // PRODUCTION SETTINGS (COMMENTED OUT FOR NOW)
    # $secure = true;                // UNCOMMENT IN PRODUCTION (HTTPS)
    # $httponly = true;              // UNCOMMENT IN PRODUCTION (Block JS)
    # ini_set('session.cookie_samesite', 'Strict');  // UNCOMMENT IN PRODUCTION
    
    // Settings for development/testing
    $secure = false;                // Keep false during HTTP development
    $httponly = false;              // Keep false if JS access needed
    ini_set('session.cookie_samesite', 'Lax');  // More flexible for development
    
    ini_set('session.use_only_cookies', 1); // Good to keep always enabled
    ini_set('session.cookie_httponly', $httponly);
    ini_set('session.cookie_secure', $secure);
    
    session_name($session_name);
    session_start();
    
    // ID regeneration (may cause issues during development)
    # session_regenerate_id(true);   // UNCOMMENT IN PRODUCTION
}

function is_authenticated() {
    if (!isset($_SESSION['authenticated']) || 
        $_SESSION['authenticated'] !== true 
        // THE FOLLOWING CHECKS MAY CAUSE ISSUES IN DEV:
        # || !isset($_SESSION['user_ip']) 
        # || $_SESSION['user_ip'] !== $_SERVER['REMOTE_ADDR']
        # || !isset($_SESSION['user_agent'])
        # || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']
    ) {
        return false;
    }
    return true;
}

function login_user($username) {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    
    // THE FOLLOWING LINES MAY CAUSE ISSUES IF NETWORK/DEVICE CHANGES:
    # $_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];
    # $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    
    // CSRF token generation
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    // Activity tracking
    $_SESSION['last_activity'] = time();

    // Session ID regeneration (additional security)
    session_regenerate_id(true);
}

function require_auth() {
    if (!is_authenticated()) {
        header("Location: /welcome?error=session_expired");
        exit;
    }
    
    // Session timeout (comment out if annoying during development)
    # if (time() - $_SESSION['last_activity'] > 1800) {
    #     end_session();
    #     header("Location: /welcome?error=session_timeout");
    #     exit;
    # }
    
    $_SESSION['last_activity'] = time();
}

function require_admin_auth() {
    require_auth(); // First verify user is authenticated
    
    // Admin list (can be dynamic if you prefer)
    $admins = ['jgonrui097']; // Add more users if needed
    
    if (!in_array($_SESSION['username'], $admins)) {
        header("Location: /home?error=access_denied");
        exit;
    }
}

function end_session() {
    $_SESSION = array();
    
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    session_destroy();
}

function secure_logout() {
    // Verify POST method for better security (optional but recommended)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        end_session();
        
        // Redirect with success message
        header("Location: /welcome?message=logout_success");
        exit;
    } else {
        // If not POST, redirect with error
        header("Location: /home?error=invalid_logout_method");
        exit;
    }
}
?>
