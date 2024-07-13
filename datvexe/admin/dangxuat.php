<?php

    session_start();
    if (isset($_SESSION['mySessionAdmin'])){
        unset($_SESSION['mySessionAdmin']); 
        
        //echo "<script>alert('Bạn hãy đăng nhập');</script>"; 
        


    }
    header('Location:index.php');
?>