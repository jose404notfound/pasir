<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_admin_auth();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create User and Management.</title>
    <link rel="stylesheet" href="/styles/users.css">
</head>
<body>
    <h2>Register a User.</h2>
    <form id="create-user-form" method="POST" action="/services/db/auth/create_user.php">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="password_confirm" placeholder="Confirm Password" required />
        <button type="submit">Create User.</button>
    </form>

    <hr>

    <h2>List Existing Users.</h2>
    <form id="list-users-form" method="POST" action="/services/db/auth/select_user.php">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <button type="submit">List Users.</button>
    </form>

    <div id="users-list">
        <!-- Users will be listed here -->
    </div>

    <hr>

    <h2>Delete User.</h2>
    <form id="delete-user-form" method="POST" action="/services/db/auth/delete_user.php">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="text" name="username" placeholder="Username to delete" required />
        <button type="submit">Delete User.</button>
    </form>

    <script src="/utils/formHandler.js"></script> <!-- Link to JS script -->
<a href="/home" class="back-button">Return to Menu.</a>
</body>
</html>
