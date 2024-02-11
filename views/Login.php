<?php
global $conn;
include "../config/Database.php";
session_start();

if (isset($_SESSION['is_login'])){
    header("location : dashboard.php");
}
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $data = $result->fetch_assoc();
//        echo "datanya ada";
        $_SESSION["USERNAME"] = $data["USERNAME"];
        $_SESSION["is_login"] = true;
        header("location: dashboard.php");
    }else{
        echo "datanya  ga ada";
    }
}
?>
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
    <form action="Login.php" method="POST">
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login">Login</button>
    </form>
</div>
</body>
</html>
