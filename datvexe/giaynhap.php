<style>
.container{
  display: inline-block;
  position:relative;
  cursor:pointer;
  font-size:30px;
  user-select: none;
  padding-left:40px;
  margin-bottom:10px;
}
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.checkmark{
  position:absolute;
  top:0;
  left:0;
  width:50px;
  height:50px;
  background:pink;
  
  border-radius:3px;
}
.container:hover .checkmark{
  background:#ccc;
}
.checkmark:after{
  content:"";
  position:absolute;
  display:none;
}
.container .checkmark:after{
  top:50%;
  left:50%;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  transform:translate(-50%,-50%) rotate(45deg);
}
.container input:checked ~ .checkmark{
  background:#2196F3;
}
.container input:checked ~ .checkmark:after{
  display:block;
}
.text {
    font-size: 20px;
    text-align: center;
   color: red;
   margin:0.7rem;
    position: absolute;

}
</style>
<?php
include "connect.php";
session_start();
  $sql = "SELECT * FROM ghe  ";
  $result = mysqli_query($conn, $sql);
  
  while ($row = mysqli_fetch_array($result)) {

    if($row['G_TrangThai'] == 0){
        ?>
        <label style="margin:2rem" class="container">
       
        <input type="checkbox">
        <span class="checkmark"> <b class="text" ><?php echo $row["G_MaSoGhe"]; ?></b><img src="./img/Xe/ghe/ghe.png" width="100%"/></span>
        
      </label>

        <?php 
      }else{

        ?>
        <label style="margin:2rem;margin-left:2rem" class="container">
        
        <span class="checkmark"><img src="./img/Xe/ghe/ghe.png" width="100%"/></span>
        <!-- <span style="padding:1rem"><?php //echo $row["G_MaSoGhe"]; ?></span> -->
      </label>

        <?php 


        }
  }
?>
<!--  -->