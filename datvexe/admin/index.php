<?php
        include "../connect.php";
        include "../duyettrangthaive.php";
?>
<?php
    session_start();
    if (isset($_SESSION['mySessionAdmin'])){
        echo "<script>alert('Bạn đã đăng nhập tài khoản! Nếu muốn tiếp tục quay trở lại trang Đăng nhập trước hết bạn hãy Đăng xuất tài khoản hiện tại để tiếp tục');</script>"; 
        header("Refresh: 0;url=index1.php");
    } 
    


    // if(isset($_POST['dn'])){
    //     $email = $_POST['email'];
    //     $pass = md5($_POST['pass']);
       
	// 	$error = [];
    //     $sql = "SELECT * FROM khachhang WHERE KH_Email='$email' and repassword ='$pass'";
    //     $result = mysqli_query($conn,$sql);
    //     $row = mysqli_fetch_assoc($result);


    //     if(mysqli_num_rows($result) == 1)
    //     {
    //         $_SESSION['mySession'] = "$email";	
            
    //         $trangthai = "UPDATE khachhang set KH_TrangThai='1' where KH_Ma= '".$row['KH_Ma']."'";
    //         mysqli_query($conn,$trangthai);	

    //         header('location:index.php');
           
    //     }
    //     else {
	// 		$error[] = 'Email đăng nhập hoặc mật khẩu không đúng!';    
          
    //     }

      
    // }

    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
       
		$error = [];
    $s = "SELECT * FROM admin WHERE A_Email='$email' and A_MatKhau='".$_POST['password']."'";
    $r = mysqli_query($conn,$s);

    if(mysqli_num_rows($r) == 1)
    {
        $_SESSION['mySessionAdmin'] = "$email";			
        header('location:index1.php');           
    }
    else {
        $error[] = 'Email đăng nhập hoặc mật khẩu không đúng!';       
    }
}
   
  ?> 
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login AdminDashboard</title>
  <link rel="icon" href="../img/Xe/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>

<body id="particles-js">
    
<div class="animated bounceInDown">
  <div class="container">
    <!-- <span class="error animated tada" id="msg"></span> -->
   
    <form method="post"  class="box">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Đăng nhập vào tài khoản của bạn.</h5>
      
                                    <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo ' <p class="text-center" style="color: red; font-size: 15px; margin-top:-2rem	"> <span  > <i class="fa fa-exclamation-triangle"></i> '.$error.'</span> </p>';
                                               
                                            }
                                            
                                        };		 	
                                    ?>
        <input type="text" name="email" placeholder="Email"  required>
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Passsword" id="pwd" required>
        <!-- <label>
          <input  type="checkbox">
          <span></span>
          <small class="rmb">Ghi nhớ tôi</small>
        </label> -->
        <a href="#" style="text-decoration: none;" class="forgetpass">Quên mật khẩu?</a>
        <button name="dangnhap" class="btn1">ĐĂNG NHẬP</button>
      </form>
        <a href="#" style="text-decoration: none;" class="dnthave">Bạn chưa có tài khoản? Đăng ký ngay</a>
  </div> 
     
</div>
</body>
</html>
