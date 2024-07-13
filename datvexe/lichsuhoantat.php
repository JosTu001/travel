<?php
include "connect.php";
session_start();
include "duyettrangthaive.php"

?>



<!doctype html>
<html lang="en">

<head>
    <title>Lịch sử</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="img/Xe/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript">
     function tberror(){
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: 'Bạn đã đánh giá cho chuyến này rồi',
            })
     }</script>
<body id="main-homepage">

    <!--====== LOADER =====-->
    <!-- <div class="loader"></div> -->


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>
            </div><!-- end form-center -->
        </div><!-- end overlay-content -->
    </div><!-- end overlay -->




    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="index.php" class="navbar-brand"><span><i class="fa fa-car"></i>VAN</span> TU</a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li><a href="index.php">TRANG CHỦ</a>

                    </li>
                    <li><a href="tuyen.php">CHUYẾN</a>

                    </li>
                    <li><a href="lichtrinh.php">LỊCH TRÌNH</a>

                    </li>
                    <li><a href="tintuc.php">TIN TỨC</a>

                    </li>
                    <li><a href="gioithieu.php">GIỚI THIỆU</a>

                    </li>
                    <li><a href="lienhe.php">LIÊN HỆ</a>

                    </li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.html"> <?php
                                                                                                                    if (isset($_SESSION['mySession'])) { ?><i class="fa fa-user "></i> <?php
                                                                                                                                                                                        echo '' . $_SESSION['mySession']; ?>
                                <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="taikhoan.php">Hồ sơ</a></li>
                            <li><a href="lichsu.php">Lịch sử đặt vé</a></li>
                            <li><a href="dangxuat.php">Đăng xuất</a></li>

                        </ul>
                    <?php
                                                                                                                    } else { ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user "></i><span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="dangnhap.php"><span><i class="fa fa-lock"></i> Đăng nhập</span></a></li>
                            <li><a href="dangky.php"><span><i class="fa fa-plus"></i> Đăng Ký</span> </a></li>

                        </ul>

                    </li> <?php

                                                                                                                    }
                            ?>
                </li>
                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </li>
                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
    </nav><!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-car"></i></span>VAN TU</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->

                <div class="list-group panel">
                    <!-- <a href="index.html" class="list-group-item "  data-parent="#main-menu"><span><i class="fa fa-user link-icon"></i></span></a> -->
                    <a href="index.html" class="list-group-item active" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>TRANG CHỦ</a>


                    <a href="tuyen.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>CHUYẾN</a>


                    <a href="lichtrinh.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-calendar link-icon"></i></span>LỊCH TRÌNH</a>


                    <a href="tintuc.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>TIN TỨC</a>


                    <a href="gioithieu.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-info-circle link-icon"></i></span>GIỚI THIỆU</a>


                    <a href="lienhe.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-phone link-icon"></i></span>LIÊN HỆ</a>


                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->
    <!-- end sidenav-content -->


    <!--========= PAGE-COVER ==========-->
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">LỊCH SỬ ĐẶT VÉ</h1>

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="dashboard" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="dashboard-heading">
                            <!-- <h2>lịch sư<span> ĐẶT VÉ</span></h2>
                                <p>Hi Lisa, Welcome to Star Travels!</p>
                                <p>All your trips booked with us will appear here and you'll be able to manage everything!</p> -->
                        </div><!-- end dashboard-heading -->

                        <div class="dashboard-wrapper">
                            <div class="row">

                                <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                    <ul class="nav nav-tabs nav-stacked text-center">
                                        <!-- <li><a href="dashboard.html"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li> -->
                                        <li><a href="taikhoan.php"><span><i class="fa fa-user"></i></span>Hồ sơ</a></li>
                                        <li class="active"><a href="lichsu.php"><span><i class="fa fa-ticket"></i></span>Lịch sử </a></li>
                                        <!-- <li><a href="wishlist.html"><span><i class="fa fa-heart"></i></span>Wishlist</a></li> -->
                                        <!-- <li><a href="cards.html"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li> -->
                                    </ul>
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                    <!-- <h2 class="dash-content-title text-center" >Các vé đã đặt!</h2> -->
                                    <div class="dashboard-listing booking-listing">
                                        <div class="dash-listing-heading text-center">
                                            <a style="text-decoration: none" href="lichsu.php" class="text-center"><b style="color: #A9A9A9;">VÉ ĐÃ ĐẶT</b> &emsp; | &emsp; </a>
                                            <a style="text-decoration: none" href="lichsuhoantat.php" class="text-center"><b >VÉ HOÀN TẤT</b> &emsp; | &emsp;</a>
                                            <a style="text-decoration: none" href="lichsuhuy.php" class="text-center"><b style="color: #A9A9A9;">VÉ ĐÃ HUỶ</b> </a>
                                            <!-- <div class="custom-radio">
                                                <input type="radio" id="radio01" name="radio" checked />
                                                <label for="radio01"><span></span>All Types</label>
                                            </div>end custom-radio -->

                                            <!-- <div class="custom-radio">
                                                <input type="radio" id="radio02" name="radio" />
                                                <label for="radio02"><span></span>Hotels</label>
                                            </div>end custom-radio -->

                                            <!-- <div class="custom-radio">
                                                <input type="radio" id="radio03" name="radio" />
                                                <label for="radio03"><span></span>Flights</label>
                                            </div>end custom-radio -->

                                            <!-- <div class="custom-radio">
                                                <input type="radio" id="radio04" name="radio" />
                                                <label for="radio04"><span></span>Cars</label>
                                            </div>end custom-radio -->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <?php
                                                $email = $_SESSION['mySession'];
                                                $sql = "SELECT * FROM  khachhang b,phieudatve a,chitietphieudat k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen e , thanhtoan s WHERE k.PD_Ma=a.PD_Ma and s.PD_Ma=a.PD_Ma and e.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND a.C_Ma=e.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma and KH_Email='$email' and PD_TrangThai = '2'   group by PD_NgayDat order by PD_NgayDat DESC;";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) {

                                                ?>
                                                    <?php
                                                    if ($row['PD_TrangThai'] == 1) {
                                                        $row['PD_TrangThai'] = "Đặt thành công";
                                                    } else if ($row['PD_TrangThai'] == 2) {
                                                        $row['PD_TrangThai'] = "Đã hoàn thành";
                                                    }
                                                    else if ($row['PD_TrangThai'] == 3) {
                                                        $row['PD_TrangThai'] = "Đã bị xoá";
                                                    }else {
                                                        $row['PD_TrangThai'] = "Đã huỷ";
                                                    }
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date">
                                                                <div class="b-date">
                                                                    <h3 ><?php $date=date_create($row["PD_NgayDat"]); echo date_format( $date, "d-m-Y H:i:s")  ; ?></h3>
                                                                    <p></p>
                                                                </div>
                                                                <div class="b-date" style="color: blue;">
                                                                    <h5><b><?php echo $row["PD_TrangThai"]; ?></b></h5>

                                                                </div>
                                                            </td>

                                                            <td class="dash-list-text booking-list-detail">
                                                                <h3><?php echo $row["TC_Ten"]; ?></h3>
                                                                <h4> <b><i class="fa fa-id-card-o" aria-hidden="true"></i>Thông tin khách hàng:</b></h4>
                                                                <ul class="list-unstyled booking-info">
                                                                    <li><span class="line">Họ và tên: </span> <?php echo $row["CT_TenKH"]; ?></li>
                                                                    <li><span class="line">Email:</span><?php echo $row["CT_EmailKH"]; ?></li> 
                                                                    <li><span class="line">Số điện thoại:</span><?php echo $row["CT_SdtKH"]; ?></li>
                                                                    
                                                                </ul>
                                                                <hr style="height:5px;border-width:0;color:gray;background-color:white">
                                                                <h4><b><i class="fa fa-car" aria-hidden="true"></i> Thông tin vé:</b></h4>
                                                                <ul class="list-unstyled booking-info">
                                                                <li><span class="line">Thời gian khởi hành: </span><?php $date=date_create($row["C_ThoiGianXP"]); echo date_format( $date, "d-m-Y H:i:s")  ; ?></li>
                                                                    <li><span class="line">Thời gian đến: </span><?php $date=date_create($row["C_ThoiGianDen"]); echo date_format( $date, "d-m-Y H:i:s"); ?></li>
                                                                    <li><span class="line">Mã xe: </span><?php echo $row["X_Ma"]; ?></li>
                                                                    <li><span class="line">Loại xe: </span><?php echo $row["LX_Ten"]; ?></li>
                                                                    <li><span class="line">Tài xế: </span> <?php echo $row["TX_Ten"]; ?><span class="line"></span></li>
                                                                    <li><span class="line">Điểm lên xe: </span><?php echo $row["PD_DiemDon"]; ?></li>
                                                                    
                                                                    <li><span class="line">Giá vé: </span><?php echo number_format($row["C_DonGia"]); ?> VND/ Ghế</li>
                                                                    <li><span class="line">Ghế: </span><?php $sl = "select * from  chitietphieudat,ghe where chitietphieudat.G_Ma=ghe.G_Ma and chitietphieudat.PD_Ma ='" . $row['PD_Ma'] . "' ";
                                                                                            $res = mysqli_query($conn, $sl);
                                                                                            while ($ro = mysqli_fetch_array($res)) { ?>
                                                                            <?php echo $ro["G_MaSoGhe"]; ?> &nbsp;

                                                                        <?php } ?></li>
                                                                    <li><span class="line">Tổng tiền: </span><?php echo number_format($row["PD_TongTien"]); ?></li>
                                                                    <li><span class="line">Phương thức thanh toán: </span><?php echo $row["TT_PhuongThuc"]; ?></li>

                                                                    
                                                                </ul>
                                                                <hr style="height:5px;border-width:0;color:gray;background-color:white">
                                                                <!-- <h4><i class="fa fa-font-awesome" aria-hidden="true"></i> Thông tin vé:</h4> -->
                                                                <ul class="list-unstyled booking-info">
                                                                <li><span class="line">Thời gian đặt vé: </span><?php $date=date_create($row["PD_NgayDat"]); echo date_format( $date, "d-m-Y H:i:s")  ; ?></li>
                                                                <?php
                                                                       
                                                                       if($row['PD_TrangThai'] == 'Đã huỷ'){
                                                                           ?>
                                                                               <li><span class="line">Thời gian huỷ vé: </span><?php $date=date_create($row["PD_NgayHuy"]); echo date_format( $date, "d-m-Y H:i:s")  ; ?></li>

                                                                           <?php
                                                                           
                                                                       }else{

                                                                       }
                                                                      
                                                                   ?>
                                                                

                                                                </ul>


                                                                <ul class="list-unstyled booking-info">
                                                                    <!-- ĐÁNH GIÁ -->
                                                                <?php
                                                                    if( $row['PD_TrangThai'] == 'Đã hoàn thành'){?>
                                                                        <li><span class="line">Điểm đánh giá: </span> <br>
                                                                        <?php
                                                                        $sao = "select * from danhgia where PD_Ma = '".$row['PD_Ma']."' ";
                                                                        $qe = mysqli_query( $conn, $sao );
                                                                        $n = mysqli_fetch_assoc($qe);

                                                                        if(mysqli_num_rows($qe) == false){
                                                                            echo "<span style='margin-left: 13rem;font-size:20px;color:yellow'>0/5 </span> <br> <span  style='margin-left: 11.5rem;'> </span>";
                                                                            for ($i = 1; $i <= 5; $i++) {
                                                                                    $star_color = 'color: #A9A9A9;';
                                                                                // In ra ngôi sao hiện tại với màu tương ứng
                                                                                echo '<span style="' . $star_color . '">&#9733;</span> ';
                                                                            }
                                                                            echo "<br><i style='margin-left: 5rem;'> (Bạn chưa đánh giá cho chuyến này!!)</i>";

                                                                        }else{
                                                                            echo "<span style='margin-left: 13rem;font-size:20px;color:yellow'>".$n['DG_Diem']."/5 </span> <br> <span  style='margin-left: 12rem;'> </span>";
                                                                            for ($i = 1; $i <= 5; $i++) {
                                                                                // Nếu số ngôi sao hiện tại lớn hơn hoặc bằng giá trị đánh giá
                                                                                if ($i <= $n['DG_Diem']) {
                                                                                    // Đặt màu ngôi sao thành vàng
                                                                                    $star_color = 'color: #FFD700;';
                                                                                } else {
                                                                                    // Ngược lại, đặt màu ngôi sao thành xám
                                                                                    $star_color = 'color: #A9A9A9;';
                                                                                }
                                                                                // In ra ngôi sao hiện tại với màu tương ứng
                                                                                echo '<span style="' . $star_color . '">&#9733;</span>';
                                                                        }

                                                                        }

                                                                        ?></li>

                                                                   <?php }else{

                                                                   }
                                                                ?>
                                                               
                                                                </ul>
                                                            
                                                            </td>
                                                            <td class="dash-list-btn">
                                                            <?php
                                                                    $dg = "select * from danhgia where PD_Ma = '".$row['PD_Ma']."'";
                                                                    $r = mysqli_query( $conn, $dg );
                                                                    $n = mysqli_fetch_assoc($r);
                                                                    if( $row['PD_TrangThai'] == 'Đã hoàn thành' ){
                                                                        if(mysqli_num_rows($r) == false){?>
                                                              
                                                                <button type="button" class="PD-id btn btn-primary" data-toggle="modal" data-target="#myModal" value="<?php echo $row['PD_Ma'] ?>">Đánh giá</button>
                                                                <?php }else{?>
                                                                     <button onclick="tberror()" type="button" class=" btn btn-primary" data-toggle="modal" >Đánh giá</button>

                                                                <?php } }else{} ?>
                                                                <!-- <a class="btn btn-orange" href="huyve.php?this_id=<?php //echo $row['PD_Ma'] ?>">Huỷ vé</a> -->
                                                                <a class="btn  btn-orange" href="xoaPD.php?this_id=<?php echo $row['PD_Ma'] ?>"> Xoá vé</a> 
                                                                <!-- <a class="btn" href="xoave.php?this_id=<?php //echo $row['PD_Ma'] ?>"> Xoá vé</a> -->
                                                            </td>
                                                        </tr>


                                                    </tbody> <?php } ?>
                                            </table> <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center"><b>Đánh giá chuyến đi của bạn</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
        <style>

.danhgia {
    display: inline-block;
    font-size: 30px;
}

.sao {
    cursor: pointer;
    color: #A9A9A9;
}

.sao.active, .sao:hover {
    color: #FFD700;
}


</style>
<div class="danhgia">
<?php

for ($i = 1; $i <= 5; $i++) { ?>
   
   <span class="sao" data-rating="<?php echo $i ?>">&#9733;</span> 
 <?php
}
?>

</div>
<div class="diem"></div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="background-color: darkcyan;" type="button" class="dg-sao btn btn-danger" data-dismiss="modal">Đánh giá</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

                                        </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->

                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Đảm bảo giá tốt nhất</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>An toàn và bảo mật</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Đại lý đặt vé tốt nhất</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/7.jpg);
	background-size:cover;
	">>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Tham gia bản tin của chúng tôi ngay bây giờ</h2>
                    <p>SUBSCIBE ĐỂ NHẬN THÔNG TIN CẬP NHẬT MỚI NHẤT CỦA CHÚNG TÔI.</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Nhập địa chỉ email của bạn" required />
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-contact">
                        <h3 class="footer-heading">LIÊN HỆ</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>NINH KIỀU, CẦN THƠ</li>
                            <li><span><i class="fa fa-phone"></i></span>+0123 456 789</li>
                            <li><span><i class="fa fa-envelope"></i></span>trucquyen@gmail.com</li>
                        </ul>
                    </div><!-- end columns -->

                    <!-- <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                            	<li><a href="#">Home</a></li>
                            	<li><a href="#">Flight</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Cars</a></li>
                            </ul>
                        </div>end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">TRUY CẬP NHANH</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Tuyến chạy</a></li>
                            <li><a href="#">Lịch trình</a></li>
                            <li><a href="#">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">VỀ CHÚNG TÔI</h3>
                        <p>Những trải nghiệm thoải mái của bạn là động lực phát triển của chúng tôi.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->



    </section><!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    // Lấy tất cả các ngôi sao và lặp qua từng ngôi sao
    var ds_sao = document.querySelectorAll('.sao');
    for (var i = 0; i < ds_sao.length; i++) {
        // Khi người dùng nhấp vào ngôi sao
        ds_sao[i].addEventListener('click', function() {
            // Đặt giá trị đánh giá cho hệ thống
            var diem = this.getAttribute('data-rating');

            // var id =  this.getAttribute('data-id');
            var id = $(".PD-id").val();
            // Lưu giá trị đánh giá vào cơ sở dữ liệu hoặc xử lý theo ý muốn
            console.log('Đánh giá: ' + diem);

            // $.post("get_danhgia.php", { diem: diem, id: id}, function(data){
            // $(".diem").html(data);
            // })

           
        
            // Đặt các ngôi sao trước đó thành active (vàng)
            for (var j = 0; j < ds_sao.length; j++) {
                if (j < diem) {
                  ds_sao[j].classList.add('active');
                } else {
                  ds_sao[j].classList.remove('active');
                }
            }
        });
    }

    
// Khi người dùng nhấp vào nút đánh giá
$(".dg-sao").click(function() {
    // Lấy giá trị đánh giá và id của sản phẩm
    var diem = $(".sao.active").length;
    var id = $(".PD-id").val();

    // Gửi yêu cầu đánh giá
    $.post("get_danhgia.php", { diem: diem, id: id}, function(data) {
        $(".diem").html(data);
    });
});
</script>
</html>