
<?php ob_start();
include "../connect.php";
session_start();



?>





                       
                                    <?php
                                  
                                    $tinh_id = $_POST['tinh_id'];
                                    $den = "SELECT * FROM quanhuyen where T_Ma = '$tinh_id'  ";
                                    $d = mysqli_query($conn, $den);
                                    
                                    while ($den = mysqli_fetch_array($d)) {
                                    ?>
                                        <option value="<?php echo $den['H_Ma']; ?>"><?php echo $den['H_Ten']; ?></option>
                                    <?php } 
                                ?>





