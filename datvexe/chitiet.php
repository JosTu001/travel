<?php
include "connect.php";
session_start();
//   if (!isset($_SESSION['mySession'])){

//       echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
//       header('Refresh:0;url=dangnhap.php');
//   }
include "duyettrangthaive.php"
?>
<?php

$this_id = $_GET['this_id'];
// echo $this_id;
// $sql = "SELECT * FROM tuyenchay where TC_Ma = " . $this_id;
// $query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($query);

if (isset($_POST['datve'])) {
    $email = $_SESSION['mySession'];
    $ghe = $_POST['ghe'];


    $sql = "SELECT * FROM khachhang WHERE KH_Email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        while ($row = mysqli_fetch_array($result)) {
            foreach ($ghe as $item) {
                $id = "";
                $khach = $row["KH_Ma"];
                $dd = $_POST['dd'];
                $trangthai = "1";
                //;
                $sql = "INSERT INTO phieudatve (PD_Ma,KH_Ma,C_Ma,G_Ma,PD_NgayDat,PD_DiemDon) VALUES ('$id','$khach','" . $this_id . "','$item', NOW() ,'$dd')";

                mysqli_query($conn, $sql);
                $sq = "UPDATE ghe set G_TrangThai='$trangthai' where G_Ma='$item'";
                mysqli_query($conn, $sq);
                // header('location:thahtoan.php');
            }
        }
    }
}

// if (isset($_POST['datve'])) {
//     $id = "";
// $name=$_POST['name'];
// $gioitinh=$_POST['gioitinh'];
// $ngaysinh = $_POST['ngaysinh'];
// $email = $_POST['email'];
// $sdt = $_POST['sdt'];
// $diachi = $_POST['diachi'];

//    if (!isset($_SESSION['mySession'])){

//       echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
//       header('Refresh:0;url=dangnhap.php');
//   }else{
// $sql = "INSERT INTO phieudat (PD_Ma,TC_Ma) VALUES ('$id','" . $row['TC_Ma'] . "')";
// mysqli_query($conn, $sql);
//header('location:datve.php');
// }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Car Detail Left Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

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

    <!-- Date-Picker Stylesheet -->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript"> 
    function tb(){
        Swal.fire({
   title: 'Chưa đăng nhập',
  text: "Bạn cần đăng nhập để có thể thực hiện thao tác này!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Huỷ ',
  confirmButtonText: 'Đăng nhập'
}).then((result) => {
  if (result.isConfirmed) {
    window.location="dangnhap.php";
  }
})
    }</script>

<body>

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
    </div><!-- end sidenav-content -->


    <!--================= PAGE-COVER =================-->
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">CHI TIẾT TUYẾN</h1>

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->



    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="car-details" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                        <?php
                        $sql = "SELECT * FROM chuyen a, tuyenchay b where a.TC_Ma=b.TC_Ma and C_Ma = " . $this_id;
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);

                        ?>

                        <!-- </form> -->

                        <!-- </div>end booking-form -->
                        <!-- </div>end side-bar-block -->


                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 content-side">

                        <div style="width:50%;height:50%; margin-left:25%" class="detail-slider">
                            <div class="feature-slider">
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-img" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-img" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-img" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-img" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-img" /></div>
                            </div><!-- end feature-slider -->

                            <div class="feature-slider-nav">
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-thumb" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-thumb" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-thumb" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-thumb" /></div>
                                <div><img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="feature-thumb" /></div>
                            </div><!-- end feature-slider-nav -->


                            <ul class="list-unstyled features tour-features">

                                <li>
                                    <div class="f-icon"><i class="fa fa-money"></i></div>
                                    <div class="f-text">
                                        <p style=" font-size:23px" class="f-heading"><b><?php echo number_format($row["C_DonGia"]); ?> <span>VNĐ</b></p>
                                        <p class="f-data"></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="f-icon"><i class="fa fa-calendar"></i></div>
                                    <div class="f-text">
                                        <p class="f-heading"><?php $date = date_create($row["C_ThoiGianXP"]);
                                                                echo date_format($date, "d-m-Y (H:i:s)"); ?></p>
                                        <p class="f-data"><?php $date = date_create($row["C_ThoiGianDen"]);
                                                            echo date_format($date, "d-m-Y (H:i:s)"); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="f-icon"><i class="fa fa-clock-o"></i></div>
                                    <div class="f-text">
                                        <p class="f-heading">ƯU ĐÃI</p>
                                        <p class="f-data">10% OFF</p>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end detail-slider -->
                        <?php
                        $sql = "SELECT * FROM chuyen a, tuyenchay b where a.TC_Ma=b.TC_Ma and C_Ma = " . $this_id;
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);

                        if (isset($_SESSION['mySession'])) { ?>

                            <div class="detail-tabs text-center">
                                <a style="font-size: 20px; width:30%;border-radius:10px;" href="d.php?this_id=<?php echo $row['C_Ma'] ?>"  class="btn btn-orange">Đặt vé </a>
                            </div>
                        <?php
                        } else {


                        ?>

                            <div class="detail-tabs text-center">
                                <button onclick="tb()" style="font-size: 20px; width:30%;border-radius:10px;" class=" btn btn-orange btn-lg">Đặt vé</button>
                            </div>
                        <?php

                        } ?>
                    </div>

                    <div class="detail-tabs">

                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#car-information" data-toggle="tab">ĐIỂM ĐÓN, TRẢ</a></li>
                            <li><a href="#cr-features" data-toggle="tab">TIỆN ÍCH</a></li>
                            <li><a href="#rental-info" data-toggle="tab">CHÍNH SÁCH</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="car-information" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3><?php echo $row["TC_Ten"]; ?></h3>
                                        <?php
                                        $sql = "SELECT * FROM chuyen a, benxe b where a.BXKH_Ma=b.BX_Ma and C_Ma = " . $this_id;
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($query);
                                        ?>
                                        <p><b>Điểm đón: </b><?php echo $row["BX_Ten"]; ?></p>
                                        <?php
                                        $sql = "SELECT * FROM chuyen a, benxe b where a.BXD_Ma=b.BX_Ma and C_Ma = " . $this_id;
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($query);
                                        ?>
                                        <p><b>Điểm trả: </b><?php echo $row["BX_Ten"]; ?></p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end car-information -->

                            <div id="cr-features" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="list-info cr-list-info">

                                        <ul class="list-unstyled list-inline car-features">
                                            <li><span><i class="fa fa-wifi"></i></span>Wifi</li>
                                            <li><span><i class="fa fa-snowflake-o"></i></span>Điều hoà</li>
                                            <li><span><i class="fa fa-battery-full"></i></span>Sạc pin</li>

                                            <li><span><i class="fa fa-music"></i></span>Music</li>
                                            <li><span><i class="fa fa-tv"></i></span>Tivi LED</li>
                                            <li><span><i class="fa fa-coffee"></i></span>Nước uống</li>
                                        </ul>

                                    </div><!-- end crs-list-info -->
                                </div><!-- end row -->
                            </div><!-- end cr-features -->

                            <div id="rental-info" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>CHÍNH SÁCH NHÀ XE</h3>
                                        <h4>Yêu cầu khi lên xe</h4>
                                        <ul>
                                            <li>Có mặt tại văn phòng/quầy vé/bến xe trước 30 phút để làm thủ tục lên xe</li>
                                            <li>Đổi vé giấy trước khi lên xe</li>
                                            <li>Xuất trình SMS/Email đặt vé trước khi lên xe</li>
                                            <li>Không hút thuốc, uống rượu, sử dụng chất kích thích trên xe</li>
                                            <li>Không mang các vật dễ cháy nổ lên xe</li>
                                            <li>Không vứt rác trên xe</li>
                                        </ul>
                                        <h4>Hành lý xách tay</h4>
                                        <ul>
                                            <li>Tổng trọng lượng hành lý không vượt quá 20 kg</li>
                                            <li>Không vận chuyển hàng hóa cồng kềnh</li>
                                        </ul>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end rental-info -->

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->


                </div><!-- end container -->
            </div><!-- end car-detail -->
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
                            <li><a href="#">chuyến</a></li>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-slick.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>