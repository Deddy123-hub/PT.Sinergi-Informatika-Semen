<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="container">

<!--header-->
    <?php include "layouts/header.html"?>


    <main>
        <a href="Index.php">Home Page</a>
        <?php
        global $conn;
        include "../config/Database.php";

        $query = "SELECT * FROM menu";
        $result = mysqli_query($conn, $query);

        // Memulai looping untuk menampilkan data
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<a href="#">' . $row["MENU_NAME"] . '</a>&nbsp;';
        }
        ?>
        <a href="Login.php">Login</a>
    </main>

<!--Footer-->
    <?php include "layouts/footer.html"?>


</div>


</body>


</html>
