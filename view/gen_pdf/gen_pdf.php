<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');/*

@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");*/
require('../../assets/fpdf/fpdf.php');
	
$count = 0;
		//if($_GET['batid']>=0){

$query = "SELECT * FROM fulldemo WHERE id = '".$_GET['id']."';";
$result = mysqli_query($con, $query);
				
//$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['id']."';") or die("could not search");
while($row = mysqli_fetch_assoc($result)){
	$fname = $row['name'];
	$lplace1 = $row['city'];
	$id = $row['id'];
	$img = $row['location'];
	$des = $row['description'];
	$count = 1;
		
		//echo '<p><img src="'.$row['location'].'"></p>';
	$output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
		//echo $output;
		
		//echo '<p><img src="'.$row['description'].'"></p>';
		
	}//}

	class PDF extends FPDF
{


// Page header
function Header()
{
    // Logo
	global $img;
	global $fname;
	
    $this->Image("../../assets/images/".$img,10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,$fname,0,0,'C');
    // Line break
    $this->Ln(45);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
global $lplace1;
global $des;
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Printing line number : '.$lplace1,0,1);
$pdf->Cell(0,10,'Printing line number : '.$des,0,1);
$pdf->Output();


?>
