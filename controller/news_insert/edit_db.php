
<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect("localhost","user","","test2");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

header('Location:news_before.php?id='.$ns_id);
 
ob_end_flush();?>

