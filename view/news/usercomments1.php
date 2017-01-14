<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$name_entered= $_POST['name'];
$comment_entered= $_POST['comment'];
$neid= $_POST['webpage'];

//echo $table;

$date= date("m-d-Y");

$user = "user"; //root
$password = ""; 
$host = "localhost"; 
$dbase = "project";//project 



include ('../../database/dbconnect.php');
/*
$connection= mysql_connect ($host, $user, $password);//
if (!$connection)//
{
die ('Could not connect:' . mysql_error());//
}
mysql_select_db($dbase, $connection);//
/*
$qry = "SELECT 1 from $table;";
$result = mysqli_query($con, $qry);

$x=mysqli_num_rows($result);
if($x==0){
*/

$val = mysqli_query($con,"SELECT 1 FROM comment ORDER BY ID DESC where neid ='$neid'");

if($val == FALSE){
   
if ((!empty($name_entered)) && (!empty($comment_entered)))
{
/*
$qry = "INSERT INTO $table (name, date, comments)
VALUES ('$name_entered', '$date', '$comment_entered')");
$result = mysqli_query($con, $qry);
        
*/
mysqli_query($con,"INSERT INTO comment (name, date, comments,neid)
VALUES ('$name_entered', '$date', '$comment_entered','$neid')");
}
/*
$result="SELECT * FROM $table ORDER BY ID DESC";
$result1 = mysqli_query($con, $result);
*/
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


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}}

}
?> 

