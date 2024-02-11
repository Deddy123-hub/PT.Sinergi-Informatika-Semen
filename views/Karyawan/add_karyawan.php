<?php
global $conn;
include "../config/database.php";
if (isset($_POST['add_karyawan'])) {
    $nama_karyawan = $_POST['nama_karyawan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $id_jabatan = $_POST['id_jabatan'];

    $sql = "INSERT INTO karyawan (nama_karyawan,no_hp,alamat,id_jabatan) VALUES
            ('$nama_karyawan','$no_hp','$alamat','$id_jabatan')";

    if ($conn->query($sql)) {
        echo "Data Masuk";
        header("location: lihat_karyawan.php");
    } else {
        echo "data gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <form action="add_karyawan.php" method="POST">
        <div class="input-group">
            <label for="nama_karyawan">NAMA KARYAWAN:</label>
            <input type="text" id="nama_karyawan" name="nama_karyawan" required>
        </div>
        <div class="input-group">
            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>
        </div>
        <div class="input-group">
            <label for="alamat">ALAMAT:</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <?php
        $query = "SELECT id_jabatan, nama_jabatan FROM jabatan";
        $result = $conn->query($query);
        ?>
        <div class="input-group">
            <label for="level">Pilih Jabatan:</label>
            <select name="id_jabatan" id="id_jabatan">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <option value="<?= $row['id_jabatan'] ?>"><?= $row['nama_jabatan'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>


        <button type="submit" name="add_karyawan">Kirim</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>