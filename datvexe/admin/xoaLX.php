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

$this_id = $_POST['LX_Ma'];


$sql = "DELETE FROM loaixe where LX_Ma=$this_id";
mysqli_query($conn, $sql);
echo "<script>alert('Xoá thành công');</script>";
header('Refresh: 0;url=QLLX.php');

?>

