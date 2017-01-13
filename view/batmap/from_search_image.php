<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');/*
dbconnect.php
@mysql_connect("localhost","root","") or die("could not connect");
@mysql_select_db("test2") or die("could not find");*/

	
$count = 0;
		//if($_GET['batid']>=0){
//bat_info
$query = "SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;";
$result = mysqli_query($con, $query);

//$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;") or die("could not search");
while($row = mysqli_fetch_assoc($result)){
	$fname = $row['name'];
	$lplace1 = $row['city'];
	$id = $row['id'];
	$img = '../../assets/images/'.$row['location'];
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
    $count = 1;
		
		//echo '<p><img src="'.$row['location'].'"></p>';
	$output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des.'</br>';
    /*
    $output1 = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des.'</br>';
    
    $output2 = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des.'</br>';*/
		//echo $output;
	/*
    $output = '<div> '.'sciencetific name :  '.$sc_name.'</br> </br> 
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
    
    	*/
		//echo '<p><img src="'.$row['description'].'"></p>';
		
}//}
?>