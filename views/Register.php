
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="input-group">
                <label for="username">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" >
            </div>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
