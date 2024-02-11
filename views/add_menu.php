<?php
global $conn;
include "../config/Database.php";
if (isset($_POST['add_menu'])){
    $menu_id = $_POST['menu_id'];
    $id_level = $_POST['id_level'];
    $menu_name = $_POST['menu_name'];

    // Buat prepared statement
    $stmt = $conn->prepare("INSERT INTO menu (menu_id, id_level, menu_name) VALUES (?, ?, ?)");

    // Bind parameter ke statement
    $stmt->bind_param("sss", $menu_id, $id_level, $menu_name);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Data berhasil dimasukkan";
        header("location: lihat_menu.php");
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
    <h2>Login</h2>
    <form action="add_menu.php" method="POST">
        <div class="input-group">
            <label for="username">Menu ID:</label>
            <input type="text" id="id_user" name="menu_id" required>
        </div>

        <?php
        $query = "SELECT id_level, level FROM menu_level";
        $result = $conn->query($query);
        ?>

        <div class="input-group">
            <label for="level">Pilih Level:</label>
            <select name="id_level" id="id_level">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <option value="<?= $row['id_level'] ?>"><?= $row['level'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="input-group">
            <label for="username">Nama Menu:</label>
            <input type="menu_name" id="menu_name" name="menu_name" required>
        </div>
        <button type="submit" name="add_menu">Kirim</button>
    </form>
</div>




</body>
</html>
