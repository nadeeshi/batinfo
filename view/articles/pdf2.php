<?php session_start();
require('fpdf/html2pdf.php');
	
		echo '<a href="article2.php#top"></a>'
			$content = $_SESSION['cntnt2'];
			$title = $_SESSION['ttl2'];

            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',20);
            $pdf->MultiCell(0,15,$title);
            $pdf->SetFont('Arial','',16);
            $pdf->MultiCell(0,5,$content);
            $pdf->Output();
?>