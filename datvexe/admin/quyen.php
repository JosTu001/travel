
<?php ob_start();
include "../connect.php";
session_start();



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script>
    $(document).ready(function() {
    // Sự kiện khi chọn tỉnh
    $(".tinh").change(function() {
        var tinh_id = $(".tinh").val();
        $.post("get_huyen.php", { tinh_id: tinh_id }, function(data){
            $(".huyen").html(data);
        })
    })
})
   </script>                               


                            <select   name="tinht" class="tinh ">
                                    <option  value="">Chọn tên tỉnh</option>

                                    <?php
                                  
                                    $tinh = "SELECT * FROM tinhthanh  ";
                                    $t = mysqli_query($conn, $tinh);
                                   
                               
                                    while ($ro = mysqli_fetch_array($t)) {
                                        
                                    ?>

                                        <option value="<?php echo $ro['T_Ma'];?>"><?php echo $ro['T_Ten']; ?></option>
                                    <?php } 
                                    ?>

                                </select> 
                                    <select  name="diemden" class="huyen ">
                                            <option  >Chọn tên huyện</option>
                                            
                                       
                                        </select> 

