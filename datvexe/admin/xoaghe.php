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
if(isset($_POST['xoa'])){
    $this_id = $_POST['G_Ma'];
    $sql="DELETE FROM ghe where G_Ma=".$this_id;
    mysqli_query($conn,$sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
