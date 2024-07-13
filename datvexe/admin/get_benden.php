
<?php ob_start();
include "../connect.php";
session_start();



?>





                       
<?php
    $id = $_POST['tuyen_id'];

    $tuyen = "SELECT * FROM  tuyenchay where TC_Ma = '$id'";
    $tu = mysqli_query($conn, $tuyen);
    $n = mysqli_fetch_assoc($tu);
    $tuyen_ten = $n['TC_Ten'];

    
    $sql = "SELECT * FROM benxe a,  quanhuyen b, tinhthanh c where a.H_Ma = b.H_Ma and b.T_Ma = c.T_Ma and T_Ten like '%".substr($tuyen_ten, strpos($tuyen_ten, "-") + 2)."%'";
    $re = mysqli_query($conn, $sql);
    while ($den = mysqli_fetch_array($re)) {
    ?>
        <option value="<?php echo $den['BX_Ma']; ?>"><?php echo $den['BX_Ten']; ?></option>
<?php } ?>






