<?php

    session_start();
    if (isset($_SESSION['mySession'])){
        unset($_SESSION['mySession']); 
        
        //echo "<script>alert('Bạn hãy đăng nhập');</script>"; 
        


    }
    header('Location:../index.php');
?>