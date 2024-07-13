<?php
    include "connect.php";
    include "duyettrangthaive.php";
    session_start();
    $sql = "SELECT * FROM khachhang WHERE KH_Email='". $_SESSION['mySession']."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
   if (isset($_SESSION['mySession'])){
        $trangthai = "UPDATE khachhang set KH_TrangThai='0' ";
        mysqli_query($conn,$trangthai);

        unset($_SESSION['mySession']); 
       	
        
        //echo "<script>alert('Bạn hãy đăng nhập');</script>"; 
        


     }
    header('Location:dangnhap.php');
?>