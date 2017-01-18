<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
//db connection
include ('../../database/dbconnect.php');

//if post from news insert page
if(isset($_POST['new']) && $_POST['new']==1){
    //to store imge files in server
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
	move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/images/photos/" . $_FILES["image"]["name"]);
	
    //assign input field data to varibles
    $flocation=$_FILES["image"]["name"];	
	$fdname =$_REQUEST['title'];
    $r_id=$_SESSION['usr_id'];
	$descp = $_REQUEST['body'];
	
    //insert query news before table
    $ins_query="insert into news_before (`title`,`image`,`body`,`r_id`) values ('$fdname','$flocation','$descp','$r_id');";
	mysqli_query($con,$ins_query) or die(mysql_error());
	
    //to select the last inserted record id
	$result = "SELECT * FROM news_before;";
	$v="SELECT * FROM news_before WHERE nid=(SELECT MAX(nid) FROM news_before);";
	$rs = mysqli_query($con, $v) or die();
	$v_ar=mysqli_fetch_assoc($rs);
    
    //last inserted record id
	$l_id=$v_ar['nid'];
	
	//send it to news_before.php file
	header('Location:news_before.php?id='.$l_id);
}
	
?>
