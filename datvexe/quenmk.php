<?php
    include "connect.php"; 
    include "duyettrangthaive.php"
    

?>   
  

<?php

    session_start();
    // if (isset($_SESSION['mySession'])){
    //     header("Location:dangnhap2.php");
    // }
    // $this_id = $_GET["this_id"];
    // // echo $this_id;
                                  
                                                        
    // $tk=$_SESSION['mySession'];
        // $mail=$_SESSION['mySession'];
        // $sql = "SELECT * FROM khachhang where KH_email='$mail' ";
        // $result = mysqli_query($conn,$sql);
    // $num =mysqli_num_rows($query);

//    if(isset($_POST['quenmk2'])){
//         //$id = "";
//         $email=$_POST['email'];
       
//         $sql="SELECT * FROM khachhang where KH_email= $email";
//         $result = mysqli_query($conn,$sql);

//         if(mysqli_num_rows($result) == 1)
//         {
//             // $_SESSION['mySession'] = "$email";	
//             // header('location:quenmk.php');
//             $sql="UPDATE khachhang set password='1111'" ;
//             mysqli_query($conn,$sql);
            
//             echo "<script>alert('Mật khẩu khôi phục của bạn là: 1111');</script>"; 
// 			header('Refresh: 0;url=dangnhap2.php');
//         }
//         else{
//             echo "<script>alert('Email khôi phục mật khẩu không đúng!');</script>"; 
           
//         }


        
//     }  

?>


<!doctype html>
<html lang="en">

<head>
    <title>Quên mật khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="img/Xe/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

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
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i
                                            class="fa fa-search"></i></span></button></span>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>
            </div><!-- end form-center -->
        </div><!-- end overlay-content -->
    </div><!-- end overlay -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
              
                <div>
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="dangnhap.php"><span><i class="fa fa-lock"></i></span>Đăng nhập</a></li>
                            <li><a href="dangky.php"><span><i class="fa fa-plus"></i></span>Đăng Ký</a></li>
                
                        </ul>
                    </div><!-- end links -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end top-bar -->

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
                    
                    <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.html"><i
                                class="fa fa-user "></i> <?php                                          
                                            // if (isset($_SESSION['mySession']))
                                            // {
                                            //     echo '' . $_SESSION['mySession'];
                                            // }
                                        ?><span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="user-profile.html">Hồ sơ</a></li>
                            <li><a href="booking.html">Lịch sử đặt vé</a></li>
                            <li><a href="dangxuat.php">Đăng xuất</a></li>
                           
                        </ul>
                    </li> -->
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
                    <a href="index.html" class="list-group-item active" data-parent="#main-menu"><span><i
                                class="fa fa-home link-icon"></i></span>TRANG CHỦ</a>
                   

                    <a href="tuyen.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-car link-icon"></i></span>CHUYẾN</a>
                  

                    <a href="lichtrinh.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-calendar link-icon"></i></span>LỊCH TRÌNH</a>
                

                    <a href="tintuc.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-globe link-icon"></i></span>TIN TỨC</a>
                  

                    <a href="gioithieu.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-info-circle link-icon"></i></span>GIỚI THIỆU</a>
                   

                    <a href="lienhe.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-phone link-icon"></i></span>LIÊN HỆ</a>
                   

                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->
        
        
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">CHỈNH SỬA THÔNG TIN TÀI KHOẢN</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
       
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div style="padding-left:30%;padding-right:30% ;margin: 1rem auto; max-width: 60rem; padding: 1rem;">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3 class="text-center"><b>Xin chào</b></h3>
                                   
                                    <?php
                                                   
                                                        
                                                        // $tk=$_SESSION['mySession'];
                                                            $mail=$_SESSION['mySession'];
                                                            $sql = "SELECT * FROM khachhang where KH_email='$mail' ";
                                                            $result = mysqli_query($conn,$sql);
                                                        // $num =mysqli_num_rows($query);
                                                            if (isset($_SESSION['mySession']))
                                                    {
                                                                    while($row = mysqli_fetch_array($result)){
                                                                        ?>
                                                   <form method="post" class="text-center">
                                            
                                                        <div class="form-group  user-detail list-unstyled">
                                                            <h4 > <?php  echo $row["KH_Ten"]; ?></h4> 
                                                        </div>
                                                        <h5 style ="color: red">Hãy ấn "TIẾP TỤC" để đặt lại mật khẩu mới</h5>
                                                        <a  class="btn btn-orange btn-lg" href="qenmk.php">Trở lại</a>
                                                        <a   class="btn btn-orange btn-lg"  href="dangnhap2.php?this_id=<?php  echo $row['KH_Ma'] ?> "> Tiếp tục</a>
                                            
                                                    </form>    
                                                    <?php } }?>

                                    
                                   
                                </div><!-- end custom-form -->
                              
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
        <section id="newsletter-1" class="section-padding back-size newsletter"  style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/7.jpg);
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
                                    <input type="email" class="form-control input-lg" placeholder="Nhập địa chỉ email của bạn" required/>
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
