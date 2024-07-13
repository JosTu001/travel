<?php
$sql = "select * from phieudatve a, chitietphieudat b where a.PD_Ma=b.PD_Ma and PD_TrangThai = '1'";

$r = mysqli_query( $conn, $sql );
// $row = mysqli_fetch_assoc( $r );

while ( $row = mysqli_fetch_array( $r ) ) {

    $time = $row[ 'PD_NgayDat' ];
    // Thời gian ban đầu

    $new_time = date( 'Y-m-d H:i:s', strtotime( $time . ' +60 minutes' ) );
    // Cộng thêm 30 phút
    // echo $new_time;

    // echo ' /   ';
    // echo strtotime( $new_time );

    $date = new DateTime();
    $timezone = new DateTimeZone( 'Asia/Ho_Chi_Minh' );
    // Thiết lập múi giờ theo định dạng của PHP
    $now = new DateTime( 'now', $timezone );
    // Lấy thời gian hiện tại
    $current_datetime = $now->format( 'Y-m-d H:i:s' );
    // Định dạng thời gian theo ý muốn
    // echo ' /   ';
    // echo strtotime( $current_datetime );
    // echo ' /   ';
    // echo $current_datetime;

    // In ra màn hình thời gian hiện tại
    if ( strtotime( $current_datetime ) > strtotime( $new_time ) ) {
        $s = "update phieudatve set PD_TrangThai='4' where PD_Ma= '".$row[ 'PD_Ma' ]."'";
        mysqli_query( $conn, $s );

        $ghe = "update ghe set G_TrangThai ='0' where G_Ma= '".$row[ 'G_Ma' ]."'";
        mysqli_query( $conn, $ghe );
        // echo "<script>alert('Một vé đã bị huỷ do quá hạn thanh toán !');</script>";

        // header( 'Refresh: 0;url=dangnhap.php' );
        // header( 'Location: '.$_SERVER[ 'PHP_SELF' ] );
        // exit();

    }
}

?>