<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datvexe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>   
  

<?php

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM thanhtoan a, phieudatve b ,chitietphieudat t, ghe c where b.PD_Ma=t.PD_Ma and c.G_Ma=t.G_Ma and a.PD_Ma=b.PD_Ma and b.PD_Ma =  " . $this_id;
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>
    
    
    <?php $s = "select * from phieudatve, chitietphieudat,ghe where phieudatve.PD_Ma=chitietphieudat.PD_Ma and chitietphieudat.G_Ma=ghe.G_Ma and phieudatve.C_Ma ='" . $row['C_Ma'] . "' and PD_NgayDat='" . $row['PD_NgayDat'] . "'";
    $re = mysqli_query($conn, $s);
    while ($r = mysqli_fetch_array($re)) {
        // echo $r["PD_Ma"];
        // echo $r["G_MaSoGhe"];

        // $ct = "UPDATE FROM chitietphieudat where PD_Ma=  '" . $r["PD_Ma"] . "'";
        // mysqli_query($conn, $ct);
        // $q = "DELETE FROM thanhtoan where PD_Ma=  '" . $r["PD_Ma"] . "'";
        // mysqli_query($conn, $q);
        $l = "UPDATE  phieudatve set PD_TrangThai='4' where PD_Ma= '" . $r["PD_Ma"] . "'";
        mysqli_query($conn, $l);
        $t = "UPDATE ghe set G_TrangThai='0' where G_Ma= '" . $r["G_Ma"] . "'";
        mysqli_query($conn, $t);
        header('location:QLDV.php');

    }


    

    ?>

