<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/dbconnect.php');


if(isset($_POST['add']) && $_POST['add']==1){

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);


	$title = addslashes ($_POST['title']);
    $content = addslashes ($_POST['content']);
    $link = addslashes ($_POST['link']);
			
	move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/images/photos/" . $_FILES["image"]["name"]);//change file path
	$flocation=$_FILES["image"]["name"];

	
	$fdname =$_REQUEST['title'];
	$fbname =$_REQUEST['content'];
	$descp = $_REQUEST['link'];
	
	$ins_query="INSERT INTO articles (`title`,`content`,`link`,'img1') VALUES ('$fdname','$fbname','$descp','$flocation');";
	mysqli_query($con,$ins_query) or die(mysql_error());
	
	//$result = "SELECT * FROM news_before;";
	//$result = mysqli_query($con, $result) or die();
	//$x=mysqli_num_rows($result);
	//$v="SELECT * FROM news_before WHERE nid=(SELECT MAX(nid) FROM news_before);";
	
	/*$rs = mysqli_query($con, $v) or die();
	$v_ar=mysqli_fetch_assoc($rs);
	$l_id=$v_ar['nid'];
	
	
	header('Location:news_before.php?id='.$l_id); */
}
	
	
?>
