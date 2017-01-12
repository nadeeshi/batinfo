<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');
/*
dbconnect.php
$con = mysqli_connect("localhost","user","","test2");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
	move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/images/photos/" . $_FILES["image"]["name"]);//change file path
	$flocation=$_FILES["image"]["name"];

	
	$fdname =$_REQUEST['title'];

	$descp = $_REQUEST['body'];
	
	$ins_query="insert into news_before (`title`,`image`,`body`) values ('$fdname','$flocation','$descp');";
	mysqli_query($con,$ins_query) or die(mysql_error());
	
	$result = "SELECT * FROM news_before;";
	//$result = mysqli_query($con, $result) or die();
	//$x=mysqli_num_rows($result);
	$v="SELECT * FROM news_before WHERE nid=(SELECT MAX(nid) FROM news_before);";
	
	$rs = mysqli_query($con, $v) or die();
	$v_ar=mysqli_fetch_assoc($rs);
	$l_id=$v_ar['nid'];
	
	$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
	header('Location:news_before.php?id='.$l_id);
}
	
	
?>
