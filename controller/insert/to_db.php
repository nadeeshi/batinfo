<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
//db connection
include ('../../database/dbconnect.php');

//insert into photos table where the published news are stored
$ins_query="INSERT INTO photos (`location`, `caption`, `desc`,`r_id`)
SELECT image, title, body, r_id FROM news_before
WHERE nid = '" . $_GET['to_id'] . "';";
$r1=mysqli_query($con,$ins_query) or die(mysql_error());

//delete relative record from news_before tble
$sql = "DELETE  FROM news_before WHERE nid = '" . $_GET['to_id'] . "';";
mysqli_query($con,$sql); 

//if the first query is succeed return to news inset page
if ($r1) {
				
	header('Location:../../view/news/news_insert.php');
	exit();
    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}

ob_end_flush();?>
