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
    <title>Trang chủ</title>
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


<body id="main-homepage">

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


    <!--============= TOP-BAR ===========-->


    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" >
    <!-- <a href="index.php" style="padding:1rem" class=" navbar-brand "><img   style="height:170%; width:160%; " src="img/Xe/logo3.PNG" ></a> -->
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
                
              
                <a href="index.php" class=" navbar-brand "><span> VAN TU</span></a>
            </div><!-- end navbar-headeclass="nav navbar-nav navbar-right navbar-search-link"r -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li><a href="index.php">TRANG CHỦ</a>
                    <?php
                    $mpt= md5('khu du lịch sinh thái mỹ phước thành');
                    
                    print ' <li><a href="tuyen.php?name='.$mpt.'.com">CHUYẾN</a> 

                    </li>'
                    ?>
                   
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
                    </li>
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


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">
            <ul class="slides">

                <li class="item-2" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/3.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>CHÀO MỪNG BẠN ĐẾN VỚI WEBSITE</h2>
                            <h1>VAN TU</h1>
                            <a href="gioithieu.php" class="btn btn-default">Chi tiết</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

                <li class="item-1" style="background:			linear-gradient(rgba(73, 232, 243, 0.3),rgba(0,0,0,0.3)),url(img/Xe/11.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>CHÀO MỪNG BẠN ĐẾN VỚI WEBSITE</h2>
                            <h1>VAN TU</h1>
                            <a href="gioithieu.php" class="btn btn-default">Chi tiết</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/2.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>CHÀO MỪNG BẠN ĐẾN VỚI WEBSITE</h2>
                            <h1>VAN TU</h1>
                            <a href="gioithieu.php" class="btn btn-default">Chi tiết</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-1" >
            <div class="container" >
                <div class="row">
                    <div class="col-sm-12">


                        <div class="tab-content"  >


                            <div id="flights" class="tab-pane in active" >
                                <form  action="tuyen.php" method="post"  enctype="multipart/form-data">
                                    <div class="row" >

                                        <div  class="col-xs-12 col-sm-12 col-md-2 col-lg-3">

                                            <div class="form-group right-icon">
                                                
                                                <select name="di" class="form-control">
                                                <option style="text-align: center;"  value="">Điểm đi</option>
                                                <option value=""></option>
                                                <?php
                                                $tinh = "select * from tinhthanh";
                                                $t = mysqli_query($conn, $tinh);
                                                while ($di = mysqli_fetch_array($t)) {
                                                
                                                ?>
                                                    
                                                    <option   value="<?php echo $di['T_Ten'] ?>"><?php echo $di['T_Ten'] ?></option>

                                                    <?php } ?>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
                                            <div class="form-group right-icon">
                                                <select name="den"  class="form-control">

                                                    <option style="text-align: center;" value=""> Điểm đến </option>
                                                    <option  value=""></option>

                                                <?php
                                                 $tinhden = "select * from tinhthanh";
                                                 $d = mysqli_query($conn, $tinhden);
                                                while ($den = mysqli_fetch_array($d)) {
                                                
                                                ?>
                                                    
                                                    <option  value="<?php echo $den['T_Ten'] ?>"><?php echo $den['T_Ten'] ?></option>

                                                    <?php } ?>

                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>





                                        <div class="col-xs-11 col-sm-11 col-md-5 col-lg-4">
                                            <div class="row" >

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <input name="ngaydi" type="date" style="width: 300px" class="form-control " placeholder="NGÀY ĐI">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->
<!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button type="submit" name="timkiem" value="TÌM KIÊM" class="btn btn-orange">TÌM KIẾM</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end flights -->
                            <!-- end cars -->

                        </div><!-- end tab-content -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <!--=============== TUYẾN NỔI BẬC ===============-->
    <section  style="padding:0%;padding-top: 5rem;" id="hotel-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>CÁC TUYẾN NỔI BẬT</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <style>
                        img {
                            display: block;
                            max-width: 260px;
                            max-height: 220px;
                            width: auto;
                            height: auto;
                        }
                    </style>

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <?php
                        if (isset($_POST['timkiem'])) {
                            $noidung = $_POST['noidung'];
                        } else {
                            echo $noidung = false;
                        }
                        ?>
                        <?php
                        $sql = "SELECT  * FROM tuyenchay WHERE TC_Ten LIKE '%$noidung'  ";
                        // $sql="SELECT ROUND(AVG(DG_Diem),1) as 'diem',d.TC_Ma,TC_Hinh,TC_Ten  FROM danhgia a, phieudatve b, chuyen c,tuyenchay d where d.TC_Ma=c.TC_Ma and a.PD_Ma = b.PD_Ma and b.C_Ma =c.C_Ma ORDER BY diem DESC limit 3";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="item">

                                <div class="main-block hotel-block">

                                    <div class="main-img">
                                        <a href="tuyenct.php?this_id=<?php echo $row['TC_Ma'] ?>">
                                            <img src="img/Xe/ghe/<?php echo $row["TC_Hinh"]; ?>" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <!-- <li class="price"><?php //echo number_format($row["TC_Gia"]); ?> VND<span class="divider"></span></li> -->
                                                <li class="rating">
                                                <?php

                                                    $DG = "SELECT ROUND(AVG(DG_Diem),1) as 'diemDG'  FROM danhgia a, phieudatve b, chuyen c where a.PD_Ma = b.PD_Ma and b.C_Ma =c.C_Ma and c.TC_Ma = '".$row['TC_Ma']."'";                                               
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
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end offer-img -->

                                    <div class="main-info hotel-info">
                                        <div class="arrow">
                                            <a href="tuyenct.php?this_id=<?php echo $row['TC_Ma'] ?>"><span><i class="fa fa-angle-right"></i></span></a>
                                        </div><!-- end arrow -->

                                        <div class="main-title hotel-title">
                                            <a href="#"><?php echo $row["TC_Ten"]; ?></a>
                                            <!-- <p><?php //echo $row["TC_ThoiGian"]; ?></p> -->
                                        </div><!-- end hotel-title -->
                                    </div><!-- end hotel-info -->
                                </div><!-- end hotel-block -->
                            </div><!-- end item -->
                        <?php } ?>
                        <?php
                        $conn->close();
                        ?>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
    </section><!-- end hotel-offers -->


    <!--================ KHUYẾN MÃI==============-->
    <section style="padding:0%;padding-top: 5rem;" id="vehicle-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>KHUYẾN MÃI HOT</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row" width="50%">
                        <?php
                        include "connect.php";
                        $sql = "SELECT  * FROM khuyenmai limit 4 ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <style>
                                img {
                                    display: block;
                                    max-width: 260px;
                                    max-height: 220px;
                                    width: auto;
                                    height: auto;
                                }
                            </style>
                            <div class="col-sm-6 col-md-3">

                                <div class="main-block vehicle-block">
                                    <div class="main-img vehicle-img">
                                        <a href="khuyenmai.php?this_id=<?php echo $row["KM_Ma"]; ?>">
                                            <img src="img/Xe/ghe/<?php echo $row["KM_Hinh"]; ?>" class="img-responsive" alt="tour-img" />
                                        </a>
                                        <div class="vehicle-time">
                                            <p><span><i class="fa fa-clock-o"></i></span><?php $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y ")   ; ?></p>
                                        </div><!-- end vehicle-time -->
                                    </div><!-- end vehicle-img -->

                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price"><?php echo $row["KM_TyLeGG"]; ?> %<a href="khuyenmai.php?this_id=<?php echo $row["KM_Ma"]; ?>"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div><!-- end offer-price-2 -->

                                    <div class="main-info vehicle-info">
                                        <div class="main-title vehicle-title">
                                            <a href="khuyenmai.php?this_id=<?php echo $row["KM_Ma"]; ?>"><?php echo $row["KM_Ten"]; ?></a> <br> 
                                            <i><?php $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y H:s:i") ; ?> </i><br>
                                            <i><?php $date=date_create($row["KM_NgayKT"]); echo date_format( $date, "d-m-Y  H:s:i") ; ?></i>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </div>
                                        </div><!-- end vehicle-title -->
                                    </div><!-- end vehicle-info -->
                                    <div class="view-all text-center">
                        <a href="tuyen.php" class="btn btn-orange">Đặt vé ngay</a>
                    </div><!-- end view-all -->
                                </div><!-- end vehicle-block -->
                            </div><!-- end columns -->
                        <?php } ?>





                    </div><!-- end row -->

                   
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end vehicle-offers -->


    <!--================ƯU ĐÃI NỔI BẬT ==============-->
    <section style="padding-top: 5rem;" id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>ƯU ĐÃI NỔI BẬT</h2>
                        <hr class="heading-line" />
                    </div>

                    <div class="row" width="50%">
                        <?php
                        include "connect.php";
                        $sql = "SELECT * FROM khuyenmai  ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="khuyenmai.php?this_id=<?php echo $row["KM_Ma"]; ?>">
                                            <img src="img/Xe/ghe/<?php echo $row["KM_Hinh"]; ?>" class="img-responsive" alt="blog-img" />
                                        </a>
                                    </div><!-- end latest-img -->

                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-calendar-minus-o"></i><span><?php $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y H:s:i ") ; ?> </span><br></li>
                                        </ul>
                                    </div><!-- end latest-info -->

                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <div class="col-xs-10 col-sm-10 main-title">
                                                <a href="#"><?php echo $row["KM_Ten"]; ?></a>

                                            </div><!-- end columns -->
                                        </div><!-- end row -->

                                        <span class="arrow"><a href="khuyenmai.php?this_id=<?php echo $row["KM_Ma"]; ?>"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                            </div>
                        <?php } ?>
                    </div> <!-- end columns -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end latest-blog -->

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
	">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Tham gia bản tin của chúng tôi ngay bây giờ</h2>
                    <p>SUBSCIBE ĐỂ NHẬN THÔNG TIN CẬP NHẬT MỚI NHẤT CỦA CHÚNG TÔI.</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group"  >
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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/custom-video.js"></script>
    <!-- Page Scripts Ends -->


    <style>
        .rw-conversation-container .rw-header {
            background-color: hsl(45, 87%, 50%);
        }

        .rw-conversation-container .rw-messages-container .rw-message .rw-client {
            background-color: hsl(46, 90%, 54%);
        }

        .rw-launcher {
            background-color: hsl(49, 82%, 49%);
        }

        .rw-conversation-container .rw-reply {
            background-color: hsl(50, 90%, 51%);
            border: 1px solid hsl(50, 83%, 50%);
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>

    <script>
        !(function () {
            let e = document.createElement("script"),
                t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
                "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
                // Replace 1.x.x with the version that you want
                (e.async = !0),
                (e.onload = () => {
                    window.WebChat.default({
                        initPayload: '/greet',
                        customData: {
                            language: "vi"
                        },
                        socketUrl: "http://localhost:5005",
                        title: ' Hãng xe TRUCQUYEN',
                        subtitle: 'Nói xin chào và bắt đầu!',
                        connectingText: "Waiting for server...",
                        inputTextFieldHint: "Nhập tin nhắn của bạn...",
                        profileAvatar: "./img/Xe/icon-bot.png",
                        hideWhenNotConnected: true,
                        fullScreenMode: false,
                        showMessageDate: true,
                        // embedded: true,
                        showFullScreenButton: true,
                        // openLauncherImage: 'connga.jpag',
                        // closeLauncherImage: 'connga.jpg',
                        params: {
                            images: {
                                dims: {
                                    width: 300,
                                    height: 200,
                                }
                            },

                        },

                        // embedded: true,
                        customMessageDelay: (message) => {
                            let delay = message.length * 40;
                            if (delay > 3 * 1000) delay = 3 * 1000;
                            if (delay < 800) delay = 800;
                            return delay;
                        }


                    },
                        null
                    );
                    storage: "local"
                    // Thêm nút micro vào Rasa Webchat
                    const button = document.createElement("button");
                    button.innerHTML = "Micro";
                    button.onclick = () => {
                        annyang.start();
                    };
                    document.querySelector(".rw-send").appendChild(button);

                    // Xử lý kết quả nhận dạng giọng nói
                    annyang.addCallback("result", (phrases) => {
                        const inputField = document.querySelector(".rw-new-message");
                        inputField.value = phrases[0];
                        const sendButton = document.querySelector(".rw-send button");
                        sendButton.click();
                    });
                }),

                t.insertBefore(e, t.firstChild);
        })();
        localStorage.clear();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#slider-1').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                slideshow: true,
                slideshowSpeed: 4000,
                animationSpeed: 2000,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <script src="/js/index.js"></script>

    
    

    
    
</body>

</html>