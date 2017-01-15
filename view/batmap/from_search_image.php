<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/dbconnect.php');

	
$count = 0;

$query = "SELECT * FROM bat_info WHERE bat_id = '".$_GET['batid']."' ;";
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
    $count = 1;
	
    $output = '<div> '.'sciencetific name :  '.$fname.'</br> </br> 
    place :  '. $lplace1.'</div></br> 
    bat order :  '.$bat_or.'</br></br>
    kindom :  '.$kin.'</br></br>
    genus :  '.$gene.'</br></br>
    family :  '.$family.'</br></br>
    phylum :  '.$phylum.'</br></br>
    sub family :  '.$subfamily.'</br></br>
    bat class :  '.$bat_cl.'</br></br>
    common names :  '.$com_name.'</br></br>
    synonyms :  '.$syns.'</br></br>
    roost :  '.$rst.'</br></br>
    conservation status :  '.$conv_st.'</br></br>
    conservation action :  '.$conv_at.'</br></br>
    feeding :  '.$feed.'</br></br>
    breeding :  '.$breed.'</br></br>
    threats :  '.$threat.'</br></br>
    country occurences :  '.$coun_occ.'</br></br>
    measurements :  '.$measure.'</br></br>
    discription :  '.$des.'</br></br>' ;
    
		
}
?>