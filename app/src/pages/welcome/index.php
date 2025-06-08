<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Panel.</title>
    <link rel="stylesheet" href="/styles/welcome.css">
</head>
<body>
    <div class="auth-container">
        <form id="login-form">
            <h1>Login.</h1>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Sign In.</button>
        </form>
    </div>
    <script src="/utils/loginHandler.js"></script>
</body>
</html>

