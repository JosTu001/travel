<?php
    include "connect.php";
    session_start();
    include "duyettrangthaive.php"
    // $this_id = $_GET['this_id'];
    // $trangthai="0";
    // $sql="update phieudatve set PD_TrangThai='$trangthai' where PD_Ma=".$this_id;
    // mysqli_query($conn,$sql);
   
    // echo "<script>alert('Bạn đã huỷ vé đặt');</script>"; 
    // header('Refresh:0;url=lichsu.php');
?>


<?php

$this_id = $_GET['this_id'];

$sql = "SELECT * FROM  phieudatve  where PD_Ma =  " . $this_id;
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>


<?php //$s = "select * from phieudatve where C_Ma ='" . $row['C_Ma'] . "'";
// $re = mysqli_query($conn, $s);
// while ($r = mysqli_fetch_array($re)) {

    $sql = "UPDATE phieudatve set PD_TrangThai='0', PD_NgayHuy = NOW() where PD_Ma=' $this_id'";
    mysqli_query($conn, $sql);
  
// }
?>


<?php
$sl = "select * from phieudatve, chitietphieudat,ghe where phieudatve.PD_Ma=chitietphieudat.PD_Ma and chitietphieudat.G_Ma=ghe.G_Ma and chitietphieudat.PD_Ma ='" . $row['PD_Ma'] . "' ";
$res = mysqli_query($conn, $sl);
while ($ro = mysqli_fetch_array($res)) {

    if ($ro['PD_TrangThai'] == 0) {
      $sq = "UPDATE ghe set G_TrangThai='0' where G_Ma= '" . $ro["G_Ma"] . "'";
      mysqli_query($conn, $sq);
     
    }
  
} echo "<script>alert('Bạn đã huỷ vé đặt');</script>"; 
header('Refresh:0;url=lichsu.php');
?>