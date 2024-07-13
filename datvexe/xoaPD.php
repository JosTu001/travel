<?php
include 'connect.php';
session_start();

?>

<?php

$this_id = $_GET[ 'this_id' ];
$sql = "SELECT * FROM phieudatve where PD_Ma='$this_id'";
$query = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $query );
if ( $row[ 'PD_TrangThai' ] == 1 ) {
    echo"<script>alert('Chuyến xe chưa được hoàn thành! Bạn cần giữ vé để theo dỗi lịch trình');</script>";

    header( 'Refresh:0;url=lichsu.php' );
} if ( $row[ 'PD_TrangThai' ] == 2 )  {
    $sq = "UPDATE phieudatve set PD_TrangThai='3'where PD_Ma='$this_id'";
    mysqli_query( $conn, $sq );

    $sl = "select * from phieudatve, chitietphieudat,ghe where phieudatve.PD_Ma=chitietphieudat.PD_Ma and chitietphieudat.G_Ma=ghe.G_Ma and chitietphieudat.PD_Ma ='" . $row['PD_Ma'] . "' ";
    $res = mysqli_query($conn, $sl);
    while ($ro = mysqli_fetch_array($res)) {
    
        if ($ro['PD_TrangThai'] == 0) {
          $sq = "UPDATE ghe set G_TrangThai='0' where G_Ma= '" . $ro["G_Ma"] . "'";
          mysqli_query($conn, $sq);
         
        }
    }
    echo"<script>alert('Bạn đã xoá phiếu đặt vé');</script>";

    header( 'Refresh:0;url=lichsuhoantat.php' );
}
if ( $row[ 'PD_TrangThai' ] == 0 )  {
    $sq = "UPDATE phieudatve set PD_TrangThai='3'where PD_Ma='$this_id'";
    mysqli_query( $conn, $sq );

    $sl = "select * from phieudatve, chitietphieudat,ghe where phieudatve.PD_Ma=chitietphieudat.PD_Ma and chitietphieudat.G_Ma=ghe.G_Ma and chitietphieudat.PD_Ma ='" . $row['PD_Ma'] . "' ";
    $res = mysqli_query($conn, $sl);
    while ($ro = mysqli_fetch_array($res)) {
    
        if ($ro['PD_TrangThai'] == 0) {
          $sq = "UPDATE ghe set G_TrangThai='0' where G_Ma= '" . $ro["G_Ma"] . "'";
          mysqli_query($conn, $sq);
         
        }
    }
    echo"<script>alert('Bạn đã xoá phiếu đặt vé');</script>";

    header( 'Refresh:0;url=lichsuhuy.php' );
}

?>

