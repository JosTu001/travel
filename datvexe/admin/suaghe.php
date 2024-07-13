<?php
include "../connect.php";
session_start();
if (!isset($_SESSION['mySessionAdmin'])){
    echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
    header("Refresh: 0;url=index.php");
} 
?>

<?php

//$this_id = $_GET['this_id'];
// echo $this_id;



if (isset($_POST['sua'])) {
$id=$_POST['G_Ma'];
    $trangthai = $_POST['trangthai'];
    $ghe = $_POST['ghe'];

    // $xe=$_POST['X_Ma'];

    $sql = "UPDATE ghe set G_TrangThai='$trangthai', G_MaSoGhe='$ghe'where G_Ma=$id";
    mysqli_query($conn, $sql);
    // echo "<script type=\"text/javascript\">alert('Thank you form is submitted');</script>";
    header('Location: QLGhe.php' );
    // header('Refresh: 0');
    
}

?>