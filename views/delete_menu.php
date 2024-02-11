<?php
global $conn;
include "../config/database.php";
$MENU_ID = $_GET['MENU_ID'];
$query = "DELETE FROM menu WHERE MENU_ID = '$MENU_ID'";
$result = $conn->query($query);

if($result){
    header("location: lihat_menu.php");
}
?>

