<?php

include 'connect.php';
session_start();
//   if ( !isset( $_SESSION[ 'mySession' ] ) ) {

//       echo "<script>alert('Bạn chưa đăng nhập');</script>";

//       header( 'Refresh:0;url=dangnhap.php' );
//   }
?>
<?php

if ( isset( $_POST[ 'datve' ] ) ) {
    
    $email = $_SESSION[ 'mySession' ];
    $ghe = $_POST[ 'ghe' ];
    $id = '';
    $gia=$_POST[ 'gia' ];
    $khach = $_POST[ 'khach' ];
    $dd = $_POST[ 'dd' ];
    $trangthai = '1';
    $ten = $_POST[ 'ten' ];
    $sdt = $_POST[ 'sdt' ];
    $email = $_POST[ 'email' ];
    $tt = '1';
    $chuyen = $_POST[ 'chuyen' ];
    // $tuyen = $_POST[ 'tuyen' ];
    $tong = $_POST[ 'thanhtien' ];
    $pttt = $_POST[ 'PTTT' ];
    if ( !empty( $_SESSION[ 'chonghe' ] ) ) {
        // $monan = ( implode( ', ', array_keys( $_SESSION[ 'chonghe' ] ) ) ) ;
        $ghedachon = 'SELECT * FROM ghe WHERE G_Ma IN ('.implode( ',', array_keys( $_SESSION[ 'chonghe' ] ) ).')';
        $x = mysqli_query( $conn, $ghedachon );
        $ghe = array();

        while ( $row = mysqli_fetch_array( $x ) ) {
            $ghe[] = $row;
            // $total = 0;
            // $tamtinh += $row[ 'TC_DonGia' ] * $_POST[ 'soluong' ][ $row[ 'MA_Ma' ] ];
            // $total = $tamtinh + 50000;

        }
    }
    // THÊM DL VÀO BẢNG PHIẾU ĐẶT VÉ  //
    $sql = "INSERT INTO phieudatve (PD_Ma,KH_Ma,C_Ma,PD_NgayDat,PD_DiemDon, PD_TrangThai,PD_TongTien) VALUES ('$id','$khach','$chuyen', NOW() ,'$dd','$tt',' $tong')";

    mysqli_query( $conn, $sql );
    $phieudat = $conn->insert_id;

    foreach ( $ghe as $key => $q ) {
        // THÊM DL VÀO BẢNG CHI TIẾT PHIẾU ĐẶT VÉ //
        $sqlct = "INSERT INTO chitietphieudat (PD_Ma,G_Ma,CT_TenKH,CT_SdtKH,CT_EmailKH,CT_GiaGhe) VALUES ( '$phieudat','".$q['G_Ma']."','$ten','$sdt','$email','$gia')";

                mysqli_query( $conn, $sqlct );
                $sl = "UPDATE ghe set G_TrangThai='$trangthai' where G_Ma= '".$q['G_Ma']."'";
                mysqli_query( $conn, $sl );
    }
    $s = "INSERT INTO thanhtoan (TT_Ma,TT_PhuongThuc,PD_Ma) VALUES ('$id','$pttt','$phieudat')";

    mysqli_query( $conn, $s );

  

    unset( $_SESSION[ 'chonghe' ] );
    $_SESSION[ 'sl' ] = 0;

    
        echo "<script>alert('Đặt vé thành công!');</script>";

        header( 'Refresh: 0;url=lichsu.php' );
   
}

?>