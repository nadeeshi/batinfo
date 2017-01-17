<?php session_start();
require('fpdf/html2pdf.php');
	$link = $_SESSION['lnk'];
      $content = $_SESSION['cntnt'];
	$title= $_SESSION['ttl'];
	

            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',20);
            $pdf->MultiCell(0,15,$title);
            $pdf->SetFont('Arial','',16);
            $pdf->MultiCell(0,5,$content);
            $pdf->Output();
?>