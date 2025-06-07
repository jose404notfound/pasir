<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();

// Solo obtenemos el username si realmente lo vamos a usar en esta página
$username = $_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home.</title>
    <link rel="stylesheet" href="/styles/home.css">
</head>
<body>
    <div class="home-container">
        <h1 class="title">Welcome!</h1>
        <div class="links">
            <ul>
                <li><a href="/devops/">DevOps.</a></li>
                <li><a href="/cybersecurity/">CyberSecurity.</a></li>
                <li><a href="/filmzone/">Filmzone.</a></li>
                <li><a href="/blog/">Blog.</a></li>
            </ul>
        </div>
	<?php if ($username === 'jgonrui097'): ?>
		<form action="/users/" method="post" class="create-user-form">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <button type="submit" class="create-user">Users Administration.</button>
        </form>
	<?php endif; ?>
	<!-- Formulario seguro -->
    <form action="/services/db/auth/logout.php" method="post" class="logout-form">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <button type="submit" class="logout-button">Close Session.</button>
    </form>
    </div>
</body>
</html>
