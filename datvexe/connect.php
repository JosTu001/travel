
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datvexe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Không kết nối: " . $conn->connect_error);
  }
 
  mysqli_set_charset($conn, 'UTF8');
/*session_start();
  if (!isset($_SESSION['mySession'])){
      
      echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
      header('Refresh:0;url=dangnhap.php');
  }*/

?>