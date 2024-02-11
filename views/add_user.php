<?php
global $conn;
include "../config/Database.php";
if (isset($_POST['add_user'])){
    $ID_USER = $_POST['ID_USER'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $EMAIL = $_POST['EMAIL'];
    $WA = $_POST['WA'];
    $PIN = $_POST['PIN'];

    // Buat prepared statement
    $stmt = $conn->prepare("INSERT INTO user (ID_USER, USERNAME,PASSWORD,EMAIL,WA,PIN) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameter ke statement
    $stmt->bind_param("ssssss", $ID_USER,$USERNAME,$PASSWORD,$EMAIL,$WA,$PIN);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Data berhasil dimasukkan";
        header("location: lihat_user.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="container">
    <h2>Tambah User</h2>
    <form action="add_user.php" method="POST">
        <div class="input-group">
            <label for="ID USE">ID_USER:</label>
            <input type="text" id="ID_USER" name="ID_USER" required>
        </div>
        <div class="input-group">
            <label for="USERNAME">USERNAME:</label>
            <input type="text" id="USERNAME" name="USERNAME" required>
        </div>
        <div class="input-group">
            <label for="PASSWORD">PASSWORD</label>
            <input type="PASSWORD" id="PASSWORD" name="PASSWORD" required>
        </div>
        <div class="input-group">
            <label for="EMAIL">EMAIL:</label>
            <input type="EMAIL" id="EMAIL" name="EMAIL" required>
        </div>

        <div class="input-group">
            <label for="WA">WA</label>
            <input type="number" id="WA" name="WA" required>
        </div>
        <div class="input-group">
            <label for="PIN">PIN</label>
            <input type="number" id="PIN" name="PIN" required>
        </div>
        <button type="submit" name="add_user">Kirim</button>
    </form>
</div>




</body>
</html>
