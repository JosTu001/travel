<?php
include "connect.php";
session_start();
//   if (!isset($_SESSION['mySession'])){

//       echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
//       header('Refresh:0;url=dangnhap.php');
//   }
include "duyettrangthaive.php"
?>

<!doctype html>
<html lang="en">

<head>
    <title>Chuyến</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="img/Xe/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


    <!--================= PAGE-COVER =================-->
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">DANH SÁCH CHUYẾN</h1>

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="car-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

               

                    <div class="">
                    <?php
                     
                        if (isset($_POST['timkiem'])) {
                            $di = $_POST['di'];
                            $den = $_POST['den'];
                            $ngaydi = $_POST['ngaydi'];
                           
                        } else {
                            echo $di = false;
                            echo $den = false;
                            echo $ngaydi = false;

                        }
                        ?>
                        <?php
                        // $sql = "SELECT * FROM chuyen a, nhanvien b, taixe c, xe d, tuyenchay f ,benxe g where a.BXKH_Ma = g.BX_Ma and a.NV_Ma=b.NV_Ma and a.TX_Ma=c.TX_Ma and a.X_Ma=d.X_Ma and a.TC_Ma=f.TC_Ma ";

                        // //thuc thi cau lenh sql va dua doi tuong vao $result
                        // $result = $conn->query($sql);

                        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
                        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                        $offset = ($current_page - 1) * $item_per_page;
                        $products = mysqli_query($conn, "SELECT * FROM chuyen a, nhanvien b, taixe c, xe d, tuyenchay f ,benxe g where a.BXKH_Ma = g.BX_Ma and a.NV_Ma=b.NV_Ma and a.TX_Ma=c.TX_Ma and a.X_Ma=d.X_Ma and a.TC_Ma=f.TC_Ma");
                        $totalRecords = mysqli_query($conn, "SELECT * FROM chuyen a, nhanvien b, taixe c, xe d, tuyenchay f ,benxe g where a.BXKH_Ma = g.BX_Ma and a.NV_Ma=b.NV_Ma and a.TX_Ma=c.TX_Ma and a.X_Ma=d.X_Ma and a.TC_Ma=f.TC_Ma and TC_Ten LIKE '$di%'  and TC_Ten LIKE '%$den' and C_ThoiGianXP LIKE '%$ngaydi%'  and C_ThoiGianDen > NOW() ORDER BY `C_Ma` ASC ");
                        $totalRecords = $totalRecords->num_rows;
                        $totalPages = ceil($totalRecords / $item_per_page);

                        if(mysqli_fetch_array($products) == false){
                            echo "<div class='text-center'><h2 style='color:red'>Hiện tại chưa có chuyến!</h2></div>";

                        }else{

                        while ($row = mysqli_fetch_array($products)) {
                            ?>
                            <div class="list-block main-block cr-list-block">

                                <div class="list-content">
                                    <div class="main-img list-img cr-list-img">
                                        <a href="car-detail-left-sidebar.html">
                                            <img src="img/Xe/ghe/<?php echo $row["C_Hinh"]; ?>" class="img-responsive" alt="car-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price"><?php echo number_format($row["C_DonGia"]); ?> VND<span class="divider">|</span><span class="pkg">GHẾ</span></li>
                                                <li class="rating">
                                                <?php

                                                    $DG = "SELECT ROUND(AVG(DG_Diem),1) as 'diemDG'  FROM danhgia a, phieudatve b, chuyen c where a.PD_Ma = b.PD_Ma and b.C_Ma =c.C_Ma and c.C_Ma = '".$row['C_Ma']."' ";                                               
                                                    $que = mysqli_query($conn, $DG);
                                                    $o = mysqli_fetch_assoc($que);

                                                    $diemchan = floor($o['diemDG']);
                                                    $diemle = ceil($o['diemDG'] - $diemchan);

                                                    // $diemDG = '';

                                                    if(($o['diemDG'])>0){

                                                        for ($i = 0; $i < $diemchan; $i++) {
                                                            echo '<span><i class=" fa-solid fa-star" style="color:gold"></i></span>'; // Full star
                                                        }
                                                        for ($i = 0; $i < $diemle; $i++) {
                                                             echo '<span><i class="fa-solid fa-star-half-stroke " style="color:gold" ></i></span> ';
                                                        }
                                                        for ($i = 0; $i < 5- ($diemle + $diemchan); $i++) {
                                                            echo '<span ><i class="fa-solid fa-star " style="color: #A9A9A9" ></i></span> ';
                                                       }
                                                    }else{
                                                        for ($i = 1; $i <= 5; $i++) {
                                                            echo '<span ><i class="fa-solid fa-star " style="color: #A9A9A9" ></i></span> ';
                                                        }
                                                    }  
                                                    ?>
                                                    <!-- <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span> -->
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end cr-list-img -->

                                    <?php
                                        $cho="SELECT COUNT(k.G_Ma) as tong FROM chuyen a, xe d, ghe k where k.X_Ma = d.X_Ma and a.X_Ma=d.X_Ma and k.X_Ma= '".$row["X_Ma"]."' and G_TrangThai= '0' and a.C_Ma= '".$row["C_Ma"]."'";
                                        $t = mysqli_query( $conn, $cho ); 
                                        $a = mysqli_fetch_assoc($t);
                                        
                                        // echo"(Còn ".$a['tong']." chỗ trống)";

                                        ?>

                                    <div class="list-info cr-list-info">
                                        <h3 class="block-title"><a href="car-detail-left-sidebar.html"><?php echo $row["TC_Ten"]; ?></a> <span> <b style="padding-top:1.5rem;padding-bottom :1.5rem;text-transform: none; font-size: 17px;" class="block-minor">(Còn
                                        <?php echo $a['tong']; ?> chỗ trống)</b></span></h3>

                                       

                                       



                                        <p class="block-minor"><i class="fa-sharp fa-solid fa-bullseye"></i></i>&nbsp;<?php $date=date_create($row["C_ThoiGianXP"]); echo date_format( $date, "d-m-Y H:i:s"); ?>&emsp;
                                            <?php

                                            $sq = "SELECT * FROM benxe a, chuyen b where a.BX_Ma=b.BXKH_Ma and a.BX_Ma='" . $row['BXKH_Ma'] . "'";
                                            $res = $conn->query($sq);
                                            $ro = $res->fetch_assoc() ?>
                                           <i class="fa-solid fa-house-flag"></i>
                                            <span>&nbsp;<?php echo $ro["BX_Ten"]; ?></span>
                                        </p>
                                        <?php
                                        $s = "SELECT * FROM  benxe a, chuyen b where a.BX_Ma=b.BXD_Ma and a.BX_Ma='" . $row['BXD_Ma'] . "' ";
                                        $res = $conn->query($s);
                                        $r = $res->fetch_assoc() ?>
                                        <p><i class="fa fa-long-arrow-down" aria-hidden="true"></i></p>

                                        <p class="block-minor"><i class="fa-solid fa-location-dot"></i>&nbsp; <?php $date=date_create($row["C_ThoiGianDen"]); echo date_format( $date, "d-m-Y H:i:s"); ?> &emsp;
                                        <i class="fa-solid fa-house-flag"></i>
                                            <span>&nbsp;<?php echo $r["BX_Ten"]; ?></span>
                                        </p>

                                        

                                        <ul class="list-unstyled list-inline car-features">
                                            <li><span><i class="fa fa-wifi"></i></span>Wifi</li>
                                            <li><span><i class="fa fa-snowflake-o"></i></span>Điều hoà</li>
                                            <li><span><i class="fa fa-battery-full"></i></span>Sạc pin</li>

                                            <li><span><i class="fa fa-music"></i></span>Music</li>
                                            <li><span><i class="fa fa-tv"></i></span>Tivi LED</li>
                                        </ul>
                                        <a href="chitiet.php?this_id=<?php echo $row['C_Ma'] ?>" class="btn btn-orange btn-lg">Chi tiết</a>
                                        <?php
                                        if (isset($_SESSION['mySession'])) { ?>


                                            <a href="datve.php?this_id=<?php echo $row['C_Ma'] ?>" class="btn btn-orange btn-lg">Đặt vé ngay</a>
                                        <?php
                                        } else {
                                        ?>


                                            <button onclick="tb()" class="btn btn-orange btn-lg">Đặt vé ngay</button>
                                        <?php
                                        } ?>
                                    </div><!-- end crs-list-info -->
                                </div> <!-- end list-content -->
                            </div> <?php } }?>
                        <!-- end cr-list-block -->


                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end car-listing -->
    </section><!-- end innerpage-wrapper -->
    <?php
                            include './phantrang.php';
                        ?>  

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

</html>