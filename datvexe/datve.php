<?php
include "connect.php";
include "duyettrangthaive.php";
session_start();
//   if (!isset($_SESSION['mySession'])){

//       echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
//       header('Refresh:0;url=dangnhap.php');
//   }
?>
<?php

$this_id = $_GET['this_id'];

// $sql = "SELECT * FROM tuyenchay where TC_Ma = " . $this_id;
// $query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($query);
// $PD= (isset($_SESSION['phieudat']))?$_SESSION['phieudat']:[];
// print_r($PD);

if (isset($_POST['datve'])) {
    $email = $_SESSION['mySession'];
    $ghe = $_POST['ghe'];


    $sql = "SELECT * FROM khachhang  WHERE KH_Email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        while ($row = mysqli_fetch_array($result)) {
            foreach ($ghe as $item) {
                $id = "";
                	
                $khach = $row["KH_Ma"];
                $dd = $_POST['dd'];
                $trangthai = "1";
                $ten=$_POST['PD_TenKH'];
                $sdt=$_POST['PD_SdtKH'];
                $email=$_POST['PD_EmailKH'];
                $tt="1";
                
                $sql = "INSERT INTO phieudatve (PD_Ma,KH_Ma,C_Ma,G_Ma,PD_NgayDat,PD_DiemDon,PD_TenKH,PD_SdtKH,PD_EmailKH, PD_TrangThai,PD_TongTien) VALUES ('$id','$khach','" . $this_id . "','$item', NOW() ,'$dd','$ten','$sdt','$email','$tt',' 300000')";
               
                mysqli_query($conn, $sql);

                $sl = "UPDATE ghe set G_TrangThai='$trangthai' where G_Ma='$item'";
                mysqli_query($conn, $sl);
                
              
              
            }
          
        }

    }
   
  
  
}




?>

<!doctype html>
<html lang="en">

<head>
    <title>Đặt vé</title>
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

    <!-- Date-Picker Stylesheet -->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>


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



    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">ĐĂNG KÝ THÀNH VIÊN MỚI</h1>

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->



    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="registration" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="flex-content">

                            <div class="custom-form custom-form-fields">
                                <form method="post" action="index.php">
                                    <h3 class="text-center"><b>THÔNG TIN KHÁCH HÀNG</b></h3>


                                    <?php
                                    if (isset($_SESSION['mySession'])) {

                                        $email = $_SESSION['mySession'];

                                        $sql = "SELECT * FROM khachhang WHERE KH_Email='$email'";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) == 1) {

                                            while ($row = mysqli_fetch_array($result)) {

                                    ?> <div class="form-group">
                                                    <input name="PD_TenKH" type="text" class="form-control" value="<?php echo $row["KH_Ten"]; ?>" required />
                                                    <span><i class="fa fa-user"></i></span>
                                                </div>

                                                <div class="form-group">
                                                    <input name="PD_SdtKH" type="text" class="form-control" value="<?php echo $row["KH_Sdt"]; ?>" required />
                                                    <span><i class="fa fa-phone"></i></span>
                                                </div>

                                                <div class="form-group">
                                                    <input name="PD_EmailKH" type="email" class="form-control" value="<?php echo $row["KH_Email"]; ?>" required />
                                                    <span><i class="fa fa-envelope"></i></span>
                                                </div>
                                        <?php
                                            }
                                        }
                                    } else {
                                        ?><div class="form-group">
                                            <input name="PD_TenKH" type="text" class="form-control" placeholder="Họ và tên" required />
                                            <span><i class="fa fa-user"></i></span>
                                        </div>

                                        <div class="form-group">
                                            <input name="PD_SdtKH" type="number" class="form-control" placeholder="Email" required />
                                            <span><i class="fa fa-phone"></i></span>
                                        </div>

                                        <div class="form-group">
                                            <input name="PD_EmailKH" type="email" class="form-control" placeholder="Số điện thoại" required />
                                            <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                    <?php
                                    }

                                    ?>

                                    <!-- 
                                    <div class="form-group right-icon ">
                                        <select class="form-control">
                                            <option selected>Tỉnh/Thành phố</option>
                                            <option>24 hrs</option>
                                            <option>35 hrs</option>
                                            <option>48 hrs</option>
                                        </select>

                                    </div> -->

                                    <div class="form-group">
                                        <input name="dd" type="text" class="form-control" placeholder="Điểm đoán" required />
                                        <span><i class="fa fa-map"></i></span>

                                    </div>
                                    <!-- <div class="checkbox">
                                             <label><input name="yes" type="checkbox" required>Tôi đồng ý với các điều khoản đặt vé</label>
                                        </div> -->

                                    <!-- <button name="datve" type="submit" class="btn btn-orange btn-block">ĐẶT VÉ</button> -->


                                    <?php
                                    $sql = "SELECT * FROM chuyen a, tuyenchay b where a.TC_Ma=b.TC_Ma and C_Ma = " . $this_id;
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>

                            </div><!-- end custom-form -->

                            <div class="custom-form custom-form-fields flex-content-img custom-form-img img-responsive ">
                                <h3 class="text-center"><b>THÔNG TIN TUYẾN</b></h3>


                                <div>
                                    <style>
                                        img {
                                            padding-top: 3rem;
                                            display: block;
                                            max-width: 300px;
                                            max-height: 250px;
                                            width: 50%;
                                            height: 100%;
                                        }
                                    </style>
                                    <div class="main-img list-img cr-list-img">
                                        <a href="car-detail-left-sidebar.html">
                                            <img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="car-img" />
                                        </a>



                                    </div><!-- end cr-list-img --> <br><br>
                                    <div>

                                        <div>

                                            <h4><b>Tên tuyến: </b><?php echo $row["TC_Ten"]; ?></h4>
                                            <h4><b>Thời gian khởi hành: </b><?php echo $row["C_ThoiGianXP"]; ?></h4>
                                            <h4><b>Thời gian đến: </b><?php echo $row["C_ThoiGianDen"]; ?></h4>
                                            <h4><b>Đơn giá: </b><?php echo number_format($row["C_DonGia"]); ?>VND</h4>



                                        </div><!-- end crs-list-info -->

                                    </div>
                                </div>


                                <div>
                                    <h4><b>Chọn ghế:</b> </h4>
                                    <?php
                                        $tt = "0";

                                        $sql = "SELECT * FROM chuyen a, xe b, ghe c where b.X_Ma=c.X_Ma   and a.X_Ma =b.X_Ma and b.X_Ma =c.X_Ma and G_TrangThai='$tt' and  C_Ma = " . $this_id;
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                        <span>
                                            <input type="checkbox" name="ghe[]" value="<?php echo $row["G_Ma"]; ?>" />
                                            <span><i><?php echo $row["G_MaSoGhe"]; ?></i></span>




                                        <?php } ?>
                                        </span>

                                </div>


                            <?php }  ?>
                            </div><!-- end custom-form-img -->
                            <button name="datve" type="submit" class="btn btn-orange btn-block">THANH TOÁN</button>
                            </form>
                          
                        </div><!-- end form-content -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end registration -->
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-slick.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>