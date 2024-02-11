
<?php
global $conn;
include "../config/database.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--    <link rel="stylesheet" href="../assets/style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="lihat_karyawan.php">All Users</a></li>
        </ol>
    </nav>

    <!--    <h3>Hallo</h3>-->
    <!---->
    <!--    <header>-->
    <!--        <img src="../assets/assadxs.jpg" height="103" >-->
    <!--    </header>-->

    <div class="mt-3">
        <div class="container mt-5">
            <section class="row">
                <div class="col-md-6 offset-md-3 align-self-center">
                    <h1 class="text-center">Tabel List Karyawan</h1>
                    <a href="add_karyawan.php" class="btn btn-primary mb-2">Add New Karyawan</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>


                        </tr>
                        </thead>
                        <?php
                        // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita.
                        $no = 1;
                        // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
                        // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
                        $query = "SELECT * FROM karyawan";
                        // Eksekusi Query
                        // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
                        $result = mysqli_query($conn, $query);
                        // Done. Waktunya Looping
                        ?>
                        <tbody>
                        <?php
                        foreach ($result as $data){
                            echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["nama_karyawan"] ."</td>
                   <td>". $data["no_hp"] ."</td>
                  <td>". $data["alamat"] ."</td>
                  <td> 
                    <a href='delete-karyawan.php?id_karyawan=".$data["id_karyawan"]."' class='btn btn-danger mb-1' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Delete</a>
                    <a href='update_karyawan.php?id_karyawan=".$data["id_karyawan"]."' type='button' class='btn btn-success'>Edit</a>

                  </td>

                 
                 
                </tr>  
              ";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </div>

</div>
</body>

</html>