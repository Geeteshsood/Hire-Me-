<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can link to your CSS styles if needed -->
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Log In</button>
        </form>
        <p>Don't have an account? <a href="index.php">Signup</a></p> <!-- Provide a link to the signup page -->
    </div>
</body>
</html>
