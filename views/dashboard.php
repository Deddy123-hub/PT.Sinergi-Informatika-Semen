<?php
session_start();
if (isset($_POST['sign_out'])){
    session_unset();
    session_destroy();
    header("location: index.php");
}

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

    <?php include "layouts/dash/navbar.html"?>


    <main>
      <h3>Welcome to your dashboard <?= $_SESSION["USERNAME"]?></h3>

        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu User
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_user.php">Add User</a></li>
                    <li><a class="dropdown-item" href="lihat_user.php">All User</a></li>

                </ul>
            </li>
        </ul>

        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Management Menu
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_menu.php">Add Menu</a></li>
                    <li><a class="dropdown-item" href="lihat_menu.php">Lihat Menu</a></li>

                </ul>
            </li>
        </ul>

        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Activity User
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user_activity.php">Aktivitas User</a></li>
                </ul>
            </li>
        </ul>
        <hr>
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kelola Data Pegawai
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Karyawan/add_karyawan.php">Add Data Keryawan </a></li>
                    <li><a class="dropdown-item" href="Karyawan/lihat_karyawan.php">Lihat Data Karyawan</a></li>
                    <li><a class="dropdown-item" href="add_user.php">Presensi Keryawan</a></li>
                    <li><a class="dropdown-item" href="add_user.php">Cuti/Izin</a></li>
                    <li><a class="dropdown-item" href="add_user.php">SPPD</a></li>



                </ul>
            </li>
        </ul>



    </main>
    <form action="dashboard.php" method="post">
        <button type="submit" name="sign_out">Logout</button>
    </form>
    <!--Footer-->
    <?php include "layouts/footer.html"?>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
