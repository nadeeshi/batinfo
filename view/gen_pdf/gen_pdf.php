<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/dbconnect.php');
require('../../assets/fpdf/fpdf.php');
	
$count = 0;

$query = "SELECT * FROM bat_info WHERE bat_id = '".$_GET['id']."';";
$result = mysqli_query($con, $query);
				

while($row = mysqli_fetch_assoc($result)){
	$fname = $row['scientific_name'];
	$lplace1 = $row['locations'];
	$id = $row['bat_id'];
	$img = '../../assets/images/'.$row['pic'];
	$des = $row['other_details'];
    $bat_or=$row['bat_order'];
    $kin=$row['kingdom'];
    $gene=$row['genus'];
    $phylum=$row['phylum'];
    $family=$row['family'];
    $subfamily=$row['sub_family'];
    $bat_cl=$row['bat_class'];
    $com_name=$row['common_names'];
    $syns=$row['synonyms'];
    $rst=$row['roost'];
    $conv_st=$row['conservation_status'];
    $conv_at=$row['conservation_action'];
    $feed=$row['feeding'];
    $breed=$row['breeding'];
    $threat=$row['threats'];
    $coun_occ=$row['country_occurence'];
    $measure=$row['measurements'];
	$output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
	
	}

	class PDF extends FPDF
{

function Header()
{
    // image
	global $img;
	global $fname;
     
	
    $this->Image("../../assets/images/".$img,10,15,30);
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
    $this->SetY(-18);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

	
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Common names : '.$com_name,0,1);
$pdf->Cell(0,10,'Scientific name : '.$fname,0,1);

$pdf->Cell(0,10,'Synonyms : '.$syns,0,1);

$pdf->Cell(0,10,'Frequently found places : '.$lplace1,0,1);

$pdf->Cell(0,10,'Bat order : '.$bat_or,0,1);

$pdf->Cell(0,10,'Kingdom : '.$kin,0,1);

$pdf->Cell(0,10,'Genus : '.$gene,0,1);

$pdf->Cell(0,10,'Phylum : '.$phylum,0,1);

$pdf->Cell(0,10,'Family : '.$family,0,1);

$pdf->Cell(0,10,'Sub family : '.$subfamily,0,1);

$pdf->Cell(0,10,'Bat class : '.$bat_cl,0,1);

$pdf->Cell(0,10,'Roost : '.$rst,0,1);

$pdf->Cell(0,10,'Conservation status : '.$conv_st,0,1);

$pdf->Cell(0,10,'Conservation activity : '.$conv_at,0,1);

$pdf->Cell(0,10,'Feeding : '.$feed,0,1);

$pdf->Cell(0,10,'Breeding : '.$breed,0,1);

$pdf->Cell(0,10,'Threats : '.$threat,0,1);

$pdf->Cell(0,10,'Country occurences : '.$coun_occ,0,1);

$pdf->Cell(0,10,'Measurements : '.$measure,0,1);

$pdf->Cell(0,10,'Other details : '.$des,0,1);


$pdf->Output();


?>
