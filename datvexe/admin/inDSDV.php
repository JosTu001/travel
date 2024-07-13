<?php
    include "../connect.php";
    header("Content-type: text/html; charset=utf-8");
    mysqli_set_charset($conn, 'UTF8');
    require('tfpdf/tfpdf.php');

    $pdf = new tFPDF();

       
    // $this_id = $_GET['this_id'];
    $sql = "SELECT * FROM  khachhang b,phieudatve a,  chitietphieudat k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen e WHERE a.PD_Ma=k.PD_Ma and e.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND a.C_Ma=e.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma and PD_TrangThai in (2)  group by a.PD_Ma ";
    $result = mysqli_query($conn, $sql);
    // while ($row = mysqli_fetch_array($result)) { 
    // $ro = mysqli_fetch_assoc($result);

    $pdf->AddPage('P', 'A4');
    // $pdf->SetFont('Arial','B',13);
    // Add a Unicode font (uses UTF-8)
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',14);
    $pdf->SetFillColor(193,299,252);

    $pdf->SetFont('Arial','B',20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0,'TRUC');
    $pdf->SetTextColor(255, 255, 0);
    $pdf->Write(0,'QUYEN');

    $pdf->SetFont('DejaVu','',10);
    $pdf->SetTextColor(0, 0, 0);
   
    $pdf->Ln(5);

    $pdf->SetFont('DejaVu', '', 10);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Write(5,'Ninh Kiều, Cần Thơ');
    $pdf->Ln(5);
    $pdf->Write(5,'(+84) 582 544 012');
    $pdf->Ln(20);
    
    $pdf->SetFont('DejaVu', '', 20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 20, 'DANH SÁCH VÉ', 0, 0, 'C');
    $pdf->Ln(30);
   
    $pdf->SetFont('DejaVu', '', 10);
    $pdf->SetTextColor(0, 0, 0);

	$width_cell=array(10,15,50,35,15,23,40);

	$pdf->Cell($width_cell[0],10,'STT',1,0,'C',true);
    $pdf->Cell($width_cell[1],10,'Mã vé',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên chuyến',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Thời gian đặt',1,0,'C',true);
	$pdf->Cell($width_cell[4],10,'Giá vé',1,0,'C',true); 
	$pdf->Cell($width_cell[5],10,'Số lượng ghế',1,0,'C',true);
	$pdf->Cell($width_cell[6],10,'Tổng tiền',1,1,'C',true); 

	$pdf->SetFillColor(235,236,236); 
	$fill=false;
   
	$i = 0;
    $a= 0;
	while($row = mysqli_fetch_array($result)){
        $date = date_create($row["PD_NgayDat"]);
        $ngay = date_format($date,"d");
        $thang = date_format($date,"m");
        $nam = date_format($date,"Y");
		$i++;
        $pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
        $pdf->Cell($width_cell[1],10,$row['PD_Ma'],1,0,'L',$fill);
        $pdf->Cell($width_cell[2],10,$row['TC_Ten'],1,0,'L',$fill);
        $pdf->Cell($width_cell[3],10, date_format($date,"d-m-Y H:s:i"),1,0,'C',$fill);
        $pdf->Cell($width_cell[4],10,number_format($row['C_DonGia']),1,0,'C',$fill);
        $sl = "select count(G_Ma) as 'tong' from chitietphieudat where PD_Ma ='" . $row['PD_Ma'] . "' ";
        $res = mysqli_query($conn, $sl);
        while ($ro = mysqli_fetch_array($res)) { 
           
            $pdf->Cell($width_cell[5],10,$ro['tong'],1,0,'C',$fill);
        }      
        $pdf->Cell($width_cell[6],10,number_format($row['PD_TongTien']),1,1,'C',$fill);

	$fill = !$fill;

	}

    $pdf->Output();
?>


