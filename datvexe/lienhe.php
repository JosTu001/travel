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
    <title>Liên hệ</title>
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
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.html"> <?php                                          
                        if (isset($_SESSION['mySession']))
                        {?><i class="fa fa-user "></i> <?php
                            echo '' . $_SESSION['mySession'];?>
                            <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="taikhoan.php">Hồ sơ</a></li>
                                <li><a href="booking.html">Lịch sử đặt vé</a></li>
                                <li><a href="dangxuat.php">Đăng xuất</a></li>
                            
                            </ul>
                            <?php
                        }else{?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user "></i><span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu">
                                
                            <li><a href="dangnhap.php"><span><i class="fa fa-lock"></i>  Đăng nhập</span></a></li>
                            <li><a href="dangky.php"><span><i class="fa fa-plus"></i>  Đăng Ký</span> </a></li>
                            
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
        
        
        
      
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="contact-us" class="innerpage-section-padding" >
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-5 no-pd-r">
                        	<div class="custom-form contact-form">
                            	<h3>LIÊN HỆ</h3>
                               
                                <form>
                                        
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Họ và tên"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email"  required/>
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Chủ đề"  required/>
                                         <span><i class="fa fa-info-circle"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Nội dung"></textarea>
                                        <span><i class="fa fa-pencil"></i></span>
                                    </div>
    								
                                    <button class="btn btn-orange btn-block">Gửi</button>
                                </form>
                            </div><!-- end contact-form -->
                        </div><!-- end columns -->
                        
                        <div class="col-sm-12 col-md-7 no-pd-l">
                            <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2188698709883!2d105.79549687476809!3d20.98386188932022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6c44959d5%3A0xd7edcdb815622dd1!2zNTQgUC4gVHJp4buBdSBLaMO6YywgVGhhbmggWHXDom4gTmFtLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1720863703325!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div><!-- end map -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end contact-us -->
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
