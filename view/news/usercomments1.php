<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$name_entered= $_POST['name'];
$comment_entered= $_POST['comment'];
$neid= $_POST['webpage'];
//$r_id= $_POST['ses'];
//echo $table;

$date= date("m-d-Y");


include ('../../database/dbconnect.php');

$val = mysqli_query($con,"SELECT 1 FROM comment ORDER BY ID DESC where neid =25");
if(isset($_SESSION['usr_id'])){
if($val == FALSE){
   
if ((!empty($name_entered)) && (!empty($comment_entered)))
{

mysqli_query($con,"INSERT INTO comment (name, date, comments,neid,r_id)
VALUES ('$name_entered', '$date', '$comment_entered','$neid','".$_SESSION['usr_id']."')");
}

 $g = mysqli_query($con,"SELECT * FROM comment"); 
$f=mysqli_num_rows($g);
    if($f!=0){
$result= mysqli_query( $con,"SELECT * FROM comment  WHERE neid ='$neid' ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysqli_error());// 


/*
$row = mysqli_fetch_assoc($result1);
*/
while ($row = mysqli_fetch_assoc($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];
$f= $row['r_id'];

echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "$f";
echo "<br><hr><br>";

}}
}
}else{
    
     $g = mysqli_query($con,"SELECT * FROM comment"); 
    $f=mysqli_num_rows($g);
    if($f!=0){
        $result= mysqli_query( $con,"SELECT * FROM comment  WHERE neid ='$neid' ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysqli_error());// 


/*
$row = mysqli_fetch_assoc($result1);
*/
while ($row = mysqli_fetch_assoc($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];
$f= $row['r_id'];

echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "$f";
echo "<br><hr><br>";
echo "<script type='text/javascript'>alert('BVB');</script>";
}
}}
?> 