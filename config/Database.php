<?php

$host = 'localhost';
$username = 'root';
$dbname = 'db_sinergi_informatika';
$password = '';

//try {
//    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//    // Atur mode error PDO menjadi exception
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Koneksi sukses";
//} catch (PDOException $e) {
//    die("Koneksi gagal: " . $e->getMessage());
//}
// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
