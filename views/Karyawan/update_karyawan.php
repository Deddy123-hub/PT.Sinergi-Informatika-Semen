

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Update data</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<?php
global $conn;
include "../config/database.php";
// Ambil data dari patameter url browser
$id_karyawan = $_GET['id_karyawan'];

// Query ambil data dari param jika ada.
$query = "SELECT * FROM karyawan WHERE id_karyawan = $id_karyawan";
// Hasil Query
$result = mysqli_query($conn, $query);
foreach($result as $data) {
    ?>

    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4">Form Update Data</h1>

            <form method="POST">
                <div class="input-group">
                    <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" required id="nama_karyawan" value="<?= $data['nama_karyawan'] ?>" name="nama_karyawan" placeholder="Nama Karyawan">

                </div>
                <div class="input-group">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" required id="no_hp" value="<?= $data['no_hp'] ?>" name="no_hp">

                </div>
                <div class="input-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" required id="alamat" value="<?= $data['alamat'] ?>" name="alamat">
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


                <button type="submit" name="kirim">Kirim</button>
            </form>


        </div>
    </section>

<?php } ?>

<?php
global $conn;
include "../config/database.php";
// Buat kondisi jika tombol data di klik
if(isset($_POST['kirim'])){
    // Membuat variable setiap field inputan agar kodingan lebih rapi.
    $nama_karyawan = $_POST['nama_karyawan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $id_jabatan = $_POST['id_jabatan'];

    // Membuat Query
    $query = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', no_hp = '$no_hp', alamat = '$alamat', id_jabatan = '$id_jabatan' WHERE id_karyawan = '$id_karyawan'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("location: lihat_karyawan.php");
    } else {
        echo "<script>alert('Data Gagal di update!')</script>";
    }

}

?>

</body>
</html>