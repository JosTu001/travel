
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

    
    $d = "SELECT * FROM benxe a,  quanhuyen b, tinhthanh c where a.H_Ma = b.H_Ma and b.T_Ma = c.T_Ma and T_Ten like '%".substr($tuyen_ten, 0, strpos($tuyen_ten, "-") - 1 )."%'";
    $e = mysqli_query($conn, $d);
    while ($di = mysqli_fetch_array($e)) {
    ?>
        <option value="<?php echo $di['BX_Ma']; ?>"><?php echo $di['BX_Ten']; ?></option>
<?php } ?>






