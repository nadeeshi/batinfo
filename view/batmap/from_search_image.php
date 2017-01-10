<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');/*

@mysql_connect("localhost","root","") or die("could not connect");
@mysql_select_db("test2") or die("could not find");*/

	
$count = 0;
		//if($_GET['batid']>=0){

$query = "SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;";
$result = mysqli_query($con, $query);

//$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['batid']."' ;") or die("could not search");
while($row = mysqli_fetch_assoc($result)){
	$fname = $row['name'];
	$lplace1 = $row['city'];
	$id = $row['id'];
	$img = '../../assets/images/'.$row['location'];
	$des = $row['description'];
	$count = 1;
		
		//echo '<p><img src="'.$row['location'].'"></p>';
	$output = '<div> '.'name :  '.$fname.'</br> </br> place :  '. $lplace1.'</div></br>discription :  '.$des;
		//echo $output;
		
		//echo '<p><img src="'.$row['description'].'"></p>';
		
}//}
?>