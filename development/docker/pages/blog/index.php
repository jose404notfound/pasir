<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();  // Ensure the user is authenticated

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog Management</title>
    <link rel="stylesheet" href="/styles/blog.css">
</head>
<body>
    <h2>Create Blog Entry.</h2>
    <form id="create-entry-form" method="POST" action="/services/db/blog/create_entry.php">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="text" name="title" placeholder="Title" required />
        <textarea name="content" placeholder="Content" required></textarea>
        <button type="submit">Create Entry.</button>
    </form>

    <hr>

    <h2>List Blog Entries.</h2>
    <form id="list-entries-form" method="POST" action="/services/db/blog/select_entries.php">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <button type="submit">List Entries.</button>
    </form>

    <div id="blog-entries">
        <!-- Entries will be listed here -->
    </div>

    <hr>

    <?php if ($username === 'jgonrui097'): ?>
        <h2>Delete Blog Entry.</h2>
        <form id="delete-entry-form" method="POST" action="/services/db/blog/delete_entry.php">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <input type="text" name="entry_id" placeholder="Entry ID to delete" required />
            <button type="submit">Delete Entry.</button>
        </form>
    <?php endif; ?>

    <script src="/utils/blogHandler.js"></script> <!-- Link to JS script -->
    <a href="/home" class="back-button">Return to Menu.</a>
</body>
</html>