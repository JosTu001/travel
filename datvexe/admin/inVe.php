<?php
    include "../connect.php";
    header("Content-type: text/html; charset=utf-8");
    mysqli_set_charset($conn, 'UTF8');
    require('tfpdf/tfpdf.php');

    $pdf = new tFPDF();

       
    // $this_id = $_GET['this_id'];
    $sql = "SELECT * FROM  khachhang b,phieudatve a,  chitietphieudat k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen e WHERE a.PD_Ma=k.PD_Ma and e.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND a.C_Ma=e.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma  and PD_TrangThai in (1) group by PD_NgayDat ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) { 
    // $row = mysqli_fetch_assoc($result);

    $pdf->AddPage('P', 'A5');
    // $pdf->SetFont('Arial','B',13);
    // Add a Unicode font (uses UTF-8)
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',14);
    $pdf->SetFillColor(193,299,252);
  
    $pdf->Image('../img/Xe/ghe/hoavan.jpg', 0, 20, 150, 0, 'JPG');
    // Chèn ảnh nền
    // $pdf->Image('../img/Xe/ghe/hoavan.jpg', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), '', '', '', false, 150, '', false, false, 0);



    $date = date_create($row["PD_NgayDat"]);
    $ngay = date_format($date,"d");
    $thang = date_format($date,"m");
    $nam = date_format($date,"Y");



    $pdf->SetFont('Arial','B',20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0,'TRUC');
    $pdf->SetTextColor(255, 255, 0);
    $pdf->Write(0,'QUYEN');

    $pdf->SetFont('DejaVu','',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 0, "Mã số: ".$row["PD_Ma"]."", 0, 0, 'R');
    // $pdf->Write(0,"Mã Số: ".$row["PD_Ma"]."");
   
    $pdf->Ln(5);

    $pdf->SetFont('DejaVu', '', 10);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Write(5,'Ninh Kiều, Cần Thơ');
    $pdf->Ln(5);
    $pdf->Write(5,'(+84) 582 544 012');
    $pdf->Ln(10);

   
    // $pdf->Ln(10);
    // $pdf->Cell(0, 20, "Mã số: ".$row["PD_Ma"]."", 0, 0, 'R');
    // $pdf->Ln(17);
    // $pdf->Cell(0, 5, date_format($date,"d/m/Y H:s:i"), 0, 1, 'R');
    // $width = 70;
    // $pdf->Cell(70, 10, 'Tháng', 0, 1, 'R');
    // $pdf->Cell(0, 10, 'Năm', 0, 1, 'R');
    // $pdf->Ln(10);


    $pdf->SetFont('DejaVu', '', 20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 20, 'VÉ XE KHÁCH', 0, 0, 'C');
   

   
    // $pdf->Write(40,'THÔNG TIN VÉ');
    $pdf->Ln(17);
   
    
    $pdf->SetFont('DejaVu','',13);
   
    $pdf->Cell(0, 0, '--------o0o--------', 0, 0, 'C');
    $pdf->Ln(2);
    // $w = 100;
    // $pdf->MultiCell($w, 10, 'Đây là một khối văn bản với canh lề trái, phải, và giữa', 1, 'LRJ');
    $pdf->Cell(0, 20, "Chuyến: ".$row["TC_Ten"]."", 0, 0, 'C');
    $pdf->Ln(15);

    $pdf->Cell(0, 20, "Tên khách hàng: ".$row["CT_TenKH"]."", 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(0, 20, "Số điện thoại: ".$row["CT_SdtKH"]."", 0, 0, 'L');
    $pdf->Ln(10);
   
    $pdf->Cell(0, 20, "Thời khởi hành: ".date_format($date,"H:s:i (d/m/Y) ")."", 0, 0, 'L');
    $pdf->Ln(10);

    $pdf->Cell(0, 20, "Điểm lên xe: ".$row["PD_DiemDon"]."", 0, 0, 'L');
    $pdf->Ln(10);

    $pdf->Cell(50, 20, "Số xe: ".$row["X_Ma"]."", 0, 0, 'L');
    // $pdf->Ln(10);

    
    // $pdf->Cell(30, 20, "Ghế: ", 0, 0, 'L');
    $pdf->Write(20,'Ghế: ');
    $s = "select * from phieudatve a, chitietphieudat b, ghe c where a.PD_Ma=b.PD_Ma and b.G_Ma=c.G_Ma and a.C_Ma ='" . $row['C_Ma'] . "' and PD_NgayDat='" . $row['PD_NgayDat'] . "' ";
    $re = mysqli_query($conn, $s);
    while ($r = mysqli_fetch_array($re)) { 
        // $pdf->Cell(30, 20, "".$r["G_MaSoGhe"]."", 0, 0, 'L');
        $pdf->Write(20,"".$r["G_MaSoGhe"]."");
        $pdf->Write(20,'    ');
    } 
	$pdf->Ln(10);

    $pdf->Cell(0, 20, "Giá vé: ".number_format($row['C_DonGia'])." (VND/Ghế)", 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(0, 20, "Tổng tiền: ".number_format($row['PD_TongTien'])." (VND)", 0, 0, 'L');
    $pdf->Ln(20);

    $pdf->SetFont('DejaVu', '', 13);
    $pdf->Cell(130, 10, "Ngày ". $ngay ." Tháng ". $thang ." Năm ". $nam ."", 0, 1, 'R');
    $pdf->Ln(25);
   
    $pdf->Image('../img/Xe/ghe/moc-da-thanh-toan.png', 80, 140, 50, 0, 'PNG');

    

    // $pdf->Write(40,'Tên khách hàng: ');
    // $pdf->Write(40,$row["CT_TenKH"]);

    // $pdf->Write(40,'        Số điện thoại: ');
    // $pdf->Write(40,$row["CT_SdtKH"]);
    // $pdf->Ln(10);

    // $pdf->Write(40,'Tên chuyến: ');
    // $pdf->Write(40,$row["TC_Ten"]);
    // $pdf->Ln(10);

    // $pdf->Write(40,'Thời khởi hành: ');
  
    // $pdf->Write(40,date_format($date,"H:s:i (d/m/Y) "));
    // $pdf->Ln(10);

    // $pdf->Write(40,'Giá vé: ');
    // $pdf->Write(40,number_format($row['C_DonGia']));
    // $pdf->Write(40,' (VND)');
    // $pdf->Ln(10);

    // $pdf->Write(40,'Ghế: ');
    // $s = "select * from phieudatve a, chitietphieudat b, ghe c where a.PD_Ma=b.PD_Ma and b.G_Ma=c.G_Ma and a.C_Ma ='" . $row['C_Ma'] . "' and PD_NgayDat='" . $row['PD_NgayDat'] . "' ";
    // $re = mysqli_query($conn, $s);
    // while ($r = mysqli_fetch_array($re)) { 
    //     $pdf->Write(40,$r["G_MaSoGhe"]);
    //     $pdf->Write(40,'    ');
    // } 
	// $pdf->Ln(10);

    // $pdf->Write(40,'Tổng tiền: ');
    // $pdf->Write(40,number_format($row['PD_TongTien']));
    // $pdf->Write(40,' (VND)');
	// $pdf->Ln(40);

	// $pdf->Ln(40);

    

	// $width_cell=array(20,80,50,20,60,50);

	// // $pdf->Cell($width_cell[0],10,'STT',1,0,'',true);
	// $pdf->Cell($width_cell[1],10,'Tên chuyến',1,0,'C',true);
	// $pdf->Cell($width_cell[2],10,'Thời khởi hành',1,0,'C',true);
	// $pdf->Cell($width_cell[3],10,'Giá vé',1,0,'C',true); 
	// $pdf->Cell($width_cell[4],10,'Ghế',1,0,'C',true);
	// $pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 

	// $pdf->SetFillColor(235,236,236); 
	// $fill=false;
   
	// $i = 0;
	// // while($row = mysqli_fetch_array($result)){
	// // 	$i++;
	// // $pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	// $pdf->Cell($width_cell[1],10,$row['TC_Ten'],1,0,'C',$fill);
	// $pdf->Cell($width_cell[2],10, date_format($date,"d-m-Y H:s:i"),1,0,'C',$fill);
    // $pdf->Cell($width_cell[3],10,number_format($row['C_DonGia']),1,0,'C',$fill);
    // $sl = "select * from phieudatve a, chitietphieudat b, ghe c where a.PD_Ma=b.PD_Ma and b.G_Ma=c.G_Ma and a.C_Ma ='" . $row['C_Ma'] . "' and PD_NgayDat='" . $row['PD_NgayDat'] . "' ";
    // $res = mysqli_query($conn, $sl);
    // while ($ro = mysqli_fetch_array($res)) { 
	//     $pdf->Cell($width_cell[3],10,$ro['G_MaSoGhe'],1,0,'C',$fill);
    // }
	
	// $pdf->Cell($width_cell[5],10,number_format($row['PD_TongTien']),1,1,'C',$fill);

   
    
	// $fill = !$fill;

	// }
    $pdf->SetFont('DejaVu', '', 10);
    $pdf->Cell(0, 10, '(Cảm ơn quý khách đã sử dụng dịch vụ tại website của chúng tôi.)', 0, 1, 'C');
	// $pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	// Ngắt trang và thêm trang mới
    

    // Thêm nội dung vào trang thứ hai
    // $pdf->Cell(0, 10, 'Trang 2', 0, 1);
    }
    // $pdf->Cell(40,10,'Hello World!');
    $pdf->Output();
?>


