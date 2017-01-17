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
	
    $output = '<div>'.'Sciencetific Name :  '.$fname.'</br> </br>
    Place :  '. $lplace1.'</div></br>
    Bat Order :  '.$bat_or.'</br></br>
    Kindom :  '.$kin.'</br></br>
    Genus :  '.$gene.'</br></br>
    Family :  '.$family.'</br></br>
    Phylum :  '.$phylum.'</br></br>
    Sub Family :  '.$subfamily.'</br></br>
    Bat Class :  '.$bat_cl.'</br></br>
    Common Names :  '.$com_name.'</br></br>
    Synonyms :  '.$syns.'</br></br>
    Roost :  '.$rst.'</br></br>
    Conservation Status :  '.$conv_st.'</br></br>
    Conservation Action :  '.$conv_at.'</br></br>
    Feeding :  '.$feed.'</br></br>
    Breeding :  '.$breed.'</br></br>
    Threats :  '.$threat.'</br></br>
    Country Occurences :  '.$coun_occ.'</br></br>
    Measurements :  '.$measure.'</br></br>
    Discription :  '.$des.'</br></br>' ;
    
		
}
?>