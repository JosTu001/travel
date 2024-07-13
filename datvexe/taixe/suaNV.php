<?php
    include "../connect.php";
    session_start();


  
?>

<?php


$id =  $_POST['KH_Ma'];
$sql = "select * FROM nhanvien WHERE NV_Ma ='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


