<?php
        include "connect.php";
        include "duyettrangthaive.php"
?>
<?php
    session_start();
    // if (isset($_SESSION['mySession'])){
    //     header("Location:index.php");
    // }
   


    if(isset($_POST['dn'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
       
		$error = [];
        $sql = "SELECT * FROM khachhang WHERE KH_Email='$email' and password ='$pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);


        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['mySession'] = "$email";	
            
            $trangthai = "UPDATE khachhang set KH_TrangThai='1' where KH_Ma= '".$row['KH_Ma']."'";
            mysqli_query($conn,$trangthai);	

            header('location:index.php');
           
        }
        else {
			$error[] = 'Email đăng nhập hoặc mật khẩu không đúng!';    
          
        }

      
    }

//     if(isset($_POST['dn'])){
//         $email = $_POST['email'];
//         $pass = md5($_POST['pass']);
       
// 		$error = [];
//     $s = "SELECT * FROM admin WHERE A_Email='".$_POST['email']."' and A_MatKhau='".$_POST['pass']."'";
//     $r = mysqli_query($conn,$s);

//     if(mysqli_num_rows($r) == 1)
//     {
//         $_SESSION['mySession'] = "$email";			
//         header('location:./admin/index.php');           
//     }
//     else {
//         $error[] = 'Email đăng nhập hoặc mật khẩu không đúng!';       
//     }
// }
   
  ?> 


<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
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
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">ĐĂNG NHẬP ĐỂ ĐẶT VÉ NGAY !!</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3 class="text-center"><b>ĐĂNG NHẬP</b></h3>
                                    <p class="text-center" style="color: red; font-size: 15px	">
                                    <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg" > <i class="fa fa-exclamation-triangle"></i> '.$error.'</span>';
                                               
                                            }
                                            
                                        };		 	
                                    ?></p>
                                    <form method="post">
                                            
                                        <div class="form-group">
                                             <input name="email" type="text" class="form-control" placeholder="Email"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                        <input name="pass" type="password" class="form-control" placeholder="Mật khẩu" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Mật khẩu phải là chử hoặc số và có độ dài 8 ký tự"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                             
                                        </div>
                                       
                                        <!-- <div class="checkbox">
                                             <label><input type="checkbox"> Ghi nhớ tôi</label>
                                        </div> -->
                                        
                                        <button name="dn" class="btn btn-orange btn-block">Đăng nhập</button>
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p  class="link-line">Click vào đây để tạo tài khoản mới? <a style="text-decoration: none;" href="dangky.php">Đăng ký</a></p>
                                        <p class="link-line"><a style="text-decoration: none;" href="qenmk.php">Quên mật khẩu</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="img/Xe/10.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end login -->
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
	">
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
            <!--<div class="navbar-header">-->
            <!--    <img href="index.php"  style="height:150%; width:100%; " src="../img/logo/LOGO.jpg" >-->
            <!--    <button type="button" class="navbar-toggle" id="menu-button">-->
            <!--        <span class="icon-bar"></span>-->
            <!--        <span class="icon-bar"></span>-->
            <!--        <span class="icon-bar"></span>-->
            <!--    </button>-->
            <!--    <div class="header-search hidden-lg">-->
                    
            <!--        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>-->
            <!--    </div>-->
                
            
            <!--</div>end navbar-header -->

            <!--<div class="collapse navbar-collapse" id="myNavbar1">-->
            <!--    <ul class="nav navbar-nav navbar-right navbar-search-link">-->
            <!--        <li><a href="index.php">TRANG CHỦ</a>-->

            <!--        </li>-->
            <!--        <li><a href="lichtrinh.php">NHÀ HÀNG</a>-->

            <!--        </li>-->
            <!--        <li><a href="tuyen.php">LỮ HÀNH</a>-->

            <!--        </li>-->
            <!--        <li><a href="tintuc.php">TUYỂN DỤNG</a>-->

            <!--        </li>-->
            <!--        <li><a href="gioithieu.php">GIỚI THIỆU</a>-->

            <!--        </li>-->
            <!--        <li><a href="lienhe.php">LIÊN HỆ</a>-->

            <!--        </li>-->

            <!--        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.html"> <?php
                                                                                                              //if (isset($_SESSION['mySession'])) { ?><i class="fa fa-user "></i> <?php
                                                                                                                                                                                      //  echo '' . $_SESSION['mySession']; ?>-->
                <!--            <span class="fa fa-angle-down"></span></a>-->
                <!--            <ul class="dropdown-menu">-->
                <!--            <li><a href="taikhoan.php">Hồ sơ</a></li>-->
                <!--            <li><a href="lichsu.php">Lịch sử đặt vé</a></li>-->
                <!--            <li><a href="dangxuat.php">Đăng xuất</a></li>-->
    
                <!--            </ul>-->
                <!--        <?php
                                                                                                                     //} //else { ?>-->
                <!--        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user "></i><span class="fa fa-angle-down"></span></a>-->
                <!--            <ul class="dropdown-menu">-->
    
                <!--                <li><a href="dangnhap.php"><span><i class="fa fa-lock"></i> Đăng nhập</span></a></li>-->
                <!--                <li><a href="dangky.php"><span><i class="fa fa-plus"></i> Đăng Ký</span> </a></li>-->
    
                <!--            </ul>-->
    
                <!--        </li> <?php
                                                                                                       //                }
                               ?>-->
                <!--    </li>-->
                <!--    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>-->
                <!--    </li>-->
                <!--    </ul>-->
                <!--</div>end navbar collapse -->