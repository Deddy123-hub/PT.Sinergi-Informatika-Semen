<?php
global $conn;
include "../config/database.php";
$id_karyawan = $_GET['id_karyawan'];
$query = "DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$result = $conn->query($query);

if($result){
    header("location: lihat_karyawan.php");
}
?>

