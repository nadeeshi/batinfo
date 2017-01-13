<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');/*
dbconnect.php
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("test2") or die("could not find");*/
require('../../assets/fpdf/fpdf.php');
	
$count = 0;
		//if($_GET['batid']>=0){
//bat_info
$query = "SELECT * FROM fulldemo WHERE id = '".$_GET['id']."';";
$result = mysqli_query($con, $query);
				
//$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['id']."';") or die("could not search");
while($row = mysqli_fetch_assoc($result)){
	$fname = $row['name'];
	$lplace1 = $row['city'];
	$id = $row['id'];
	$img = $row['location'];
	$des = $row['description'];
	//$id=row['bat_id'];
    //$sc_name=$row['sciencetific_name'];
	 //$img=$row['pic'];
     //$bat_or=$row['bat_order'];
     //$kin=$row['kindom'];
     //$gene=$row['genus'];
     //$phylum=$row['phylum'];
    //$family=$row['family'];
    //$subfamily=$row['sub_fammily'];
    //$bat_cl=$row['bat_class'];
    //$com_name=$row['common_names'];
    //$syns=$row['synonyms'];
    //$rst=$row['roost'];
    //$lplace1=$row['locations'];
    //$conv_st=$row['conservation_status'];
    //$conv_at=$row['conservation_action'];
    //$feed=$row['feeding'];
    //$breed=$row['breeding'];
    //$threat=$row['threats'];
    //$coun_occ=$row['country_occurence'];
    //$measure=$row['measurements'];
    //$des=$row['other_details'];
    //$del=$row['del_bit'];
		
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
//global $sc_name;
	 //global $img;
     //global $bat_or;
     //global $kin;
     //global $gene;
     //global $phylum;
    //global $family;
    //global $subfamily;
    //global $bat_cl;
    //global  $com_name;
    //global $syns;
    //global $rst;
    //global $lplace1;
    //global $conv_st;
    //global $conv_at;
    //global $feed;
    //global $breed;
    //global $threa;
    //global $coun_occ;
    //global $measure;
    //global $des;
    //global $del;
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Printing line number : '.$lplace1,0,1);
$pdf->Cell(0,10,'Printing line number : '.$des,0,1);
$pdf->Cell(0,10,'Printing line number : '.$bat_or,0,1);

$pdf->Cell(0,10,'Printing line number : '.$kin,0,1);

$pdf->Cell(0,10,'Printing line number : '.$gene,0,1);

$pdf->Cell(0,10,'Printing line number : '.$phylum,0,1);

$pdf->Cell(0,10,'Printing line number : '.$family,0,1);

$pdf->Cell(0,10,'Printing line number : '.$subfamily,0,1);

$pdf->Cell(0,10,'Printing line number : '.$bat_cl,0,1);

$pdf->Cell(0,10,'Printing line number : '.$com_name,0,1);

$pdf->Cell(0,10,'Printing line number : '.$syns,0,1);

$pdf->Cell(0,10,'Printing line number : '.$rst,0,1);

$pdf->Cell(0,10,'Printing line number : '.$lplace1,0,1);

$pdf->Cell(0,10,'Printing line number : '.$conv_st,0,1);

$pdf->Cell(0,10,'Printing line number : '.$conv_at,0,1);

$pdf->Cell(0,10,'Printing line number : '.$feed,0,1);

$pdf->Cell(0,10,'Printing line number : '.$breed,0,1);

$pdf->Cell(0,10,'Printing line number : '.$threa,0,1);

$pdf->Cell(0,10,'Printing line number : '.$coun_occ,0,1);

$pdf->Cell(0,10,'Printing line number : '.$measure,0,1);

$pdf->Cell(0,10,'Printing line number : '.$del,0,1);


$pdf->Output();


?>
