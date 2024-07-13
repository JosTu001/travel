<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datvexe";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    
?>   
  

<?php

    $this_id = $_GET['this_id'];
    $sql="DELETE FROM khuyenmai where KM_Ma=".$this_id;
    mysqli_query($conn,$sql);
    header('location:QLKM.php');
   

?>

