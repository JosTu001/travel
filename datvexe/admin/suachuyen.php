

<?php
include "../connect.php";
session_start();
if (!isset($_SESSION['mySessionAdmin'])){
    echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
    header("Refresh: 0;url=index.php");
} 

$id =  $_POST['C_Ma'];
$sql = "select * FROM chuyen WHERE C_Ma ='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>




