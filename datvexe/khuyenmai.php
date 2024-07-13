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


    <style>
    .text-divider {
  display: flex;
  align-items: center;
  --text-divider-gap: 1rem;
  width: 100%;
}
.text-divider::before,
.text-divider::after {
  content: '';
  height: 1px;
  background-color: #333;
  flex-grow: 1;
}
.text-divider::before {
  margin-right: var(--text-divider-gap);
}
.text-divider::after {
  margin-left: var(--text-divider-gap);
}
.container2 {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
.container2 {
    max-width:331px;
}
.img{
    display: block; 
    margin-left: auto; 
    margin-right: auto;
}
p{ 
        color: #000000;
}

.line-clamp {
   display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;  
  overflow: hidden;
    
 
}


</style>
   

    <section style="background-color: #e9edf0;">
        
        <div class="container">
            <hr style="padding:0px;margin:50px;height:10px">
            
        </div>
         <div class="container" style="padding:0px;    background-color: white;">
                         <?php
                         $this_id = $_GET['this_id'];
                         $sql = "SELECT * FROM khuyenmai where KM_Ma=".$this_id;
                         $result = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_array($result)) {
                         ?>
                         
                     
                 <!--===================================================== BÀI VIẾT =================================================-->
                 <div class="col-sm-8" style="background-color: white;margin-top: 10px;margin-bottom: 10px;">
                      
                        
 
                             <h1 style="font-weight:bold;color:#0055a7;margin-top: 15px;"><?php echo $row["KM_Ten"]; ?></h1>
  
                             <p class="mh-meta entry-meta">
                             <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a  href="#">&ensp;<?php $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y, H:i:s") ; ?>&ensp;</a></span>
                             <!-- <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" href="#"> &ensp; <?php //echo $row['TT_TacGia'] ?>&ensp; </a></span> -->
                             <span class="entry-meta-categories"><i class="fa fa-folder-open-o"></i><a href="tintuc.php" rel="category tag">&ensp; Bài viết &ensp;</a></span>
                             <span class="entry-meta-comments"><i class="fa fa-comment-o"></i><a class="mh-comment-scroll" href="#">&ensp;20&ensp;</a></span>
                             </p>
                             
                             <hr style="background-color:#009afc; height: 1px; border: 0;">
                            
 
                                    
                                             <?php echo $row['KM_NoiDung'] ?>
                                        
                              <?php } ?>
                             
                 </div>
                
                 
                   <div class="col-sm-4" >
                         <p style="font-weight:bold;color:#0055a7;padding-top: 15px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;BÀI VIẾT KHÁC</p>
                         <hr style="background-color:#009afc; height: 2px; border: 0;">
                       <div class="container2" >
                             
                                         <?php
                                             if(isset($_GET['trang'])){
                                                 $page = $_GET['trang'];
                                             }else{
                                                   $page ='';
                                             }
                                             if($page =='' || $page == 1){
                                                  $begin = 0;
                                             }else{
                                                 $begin = ($page*3)-3;
                                             }
                                            
                                            
                                             $sql = "SELECT * FROM khuyenmai order by KM_Ma DESC LIMIT $begin,4 ";
                                             $result = mysqli_query($conn, $sql);
                                           
                                             while ($row = mysqli_fetch_array($result)) {
                                             ?>
               
                                     <a href="tintuc.php?this_id=<?php echo $row['KM_Ma'] ?>">
                                 <div class="row">
                                     <div class="col-sm-4 col-md-4 col-xs-4">
                                                           <img style="  display: block;
                                                                         max-width: 100px;
                                                                         max-height: 70px;
                                                                         width: 100%;" src="./img/Xe/ghe/<?php echo $row["KM_Hinh"]; ?>"/>
                                                 <div class="mh-meta mh-custom-posts-meta">
                                                     <span class="mh-meta-date updated"><i class="fa fa-clock-o"></i><i  style="font-size:10px"><?php $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y") ; ?></i></span>
                                                     <span class="mh-meta-comments"><i class="fa fa-comment-o"></i><a style="font-size:10px" class="mh-comment-count-link" href="">6</a></span>
                                                 </div>        
                                     </div>
                                             <?php
                                            
                                             $str = $row['KM_NoiDung'];
                                             $str = substr( $str, 0, 150);
                                             ?>
                                     <div class="col-sm-8 col-md-8 col-xs-8">
                                                 <p  class="line-clamp"> <a href="bv1.php?this_id=<?php echo $row['KM_Ma'] ?>" style="align:left"><b><?php echo $row["KM_Ten"]; ?></b></a></p>
                                                 <p class="line-clamp" ><?php echo $str ?></p>
                                     </div>
                                 </div> 
                                 
                            
                                        </a> 
                                        <hr>
                                         <?php } ?>
                                     
                                 
                               
                                             
                        
                         <div class="col-sm-12" style="display:flex;align-items:center;justify-content: center;padding-bottom: 20px;">
                             <button onclick="xemthem()" style=" height: 32px;
                                             width: 100px;
                                             border-radius: 117px;
                                             background-color: #0068ff;
                                             color: white;
                                             border: 0px;">Xem thêm</button>
                             <!--<i class="fa fa-angle-double-right" aria-hidden="true"></i>&ensp;<a href="tintuc.php"><i style="color:#ab0000;">Xem thêm</i></a>&ensp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>-->
                         </div>
         </div>
         </div>
         </div>
           <div class="container">
            <hr style="padding:0px;margin:0px;height:10px">
            
        </div>
     </section>
      <script>
         function xemthem(){
             location.assign("khuyenmai.php");
         }
         
     </script>

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