<?php
global $conn;
include "../config/database.php";
$ID_USER = $_GET['ID_USER'];
$query = "DELETE FROM user WHERE ID_USER = '$ID_USER'";
$result = $conn->query($query);

if($result){
    header("location: lihat_user.php");
}
?>

