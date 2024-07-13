<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'datvexe';

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error ) {
    die( 'Không kết nối: ' . $conn->connect_error );
}
?>

<?php
include "duyettrangthaive.php";
$id = $_POST['id'];
$diem = $_POST[ 'diem' ];

$dg = "select * from danhgia where PD_Ma = '$id'";
$r = mysqli_query( $conn, $dg );
$n = mysqli_fetch_assoc($r);

if(mysqli_num_rows($r) == false){
$s = "INSERT INTO danhgia ( DG_Diem, PD_Ma) VALUES ('$diem','$id')";
$q = mysqli_query( $conn, $s );

// echo $diem;
echo "<script>
Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Đánh giá thành công',
    showConfirmButton: false,
    timer: 2000
})
</script>";
// echo "<script>alert('Bạn vừa đánh giá ".$diem." sao cho chuyến ".$id."');</script>"; 
header('Refresh:0;url=lichsu.php');
}else{
    echo "<script>alert('Bạn đã đánh giá cho chuyến này rồi');</script>"; 
    header('Refresh:0;url=lichsu.php');
}
?>
