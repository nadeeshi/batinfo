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
$dbase = "test2";//project 



//include ('../../database/cnm_db_con.php');

$connection= mysql_connect ($host, $user, $password);//
if (!$connection)//
{
die ('Could not connect:' . mysql_error());//
}
mysql_select_db($dbase, $connection);//
/*
$qry = "SELECT 1 from $table;";
$result = mysqli_query($con, $qry);
if($result1== FALSE)        
*/

$val = mysql_query("SELECT 1 FROM comment ORDER BY ID DESC where neid =25");

if($val == FALSE){
   
if ((!empty($name_entered)) && (!empty($comment_entered)))
{
/*
$qry = "INSERT INTO $table (name, date, comments)
VALUES ('$name_entered', '$date', '$comment_entered')");
$result = mysqli_query($con, $qry);
        
*/
mysql_query("INSERT INTO comment (name, date, comments,neid)
VALUES ('$name_entered', '$date', '$comment_entered','$neid')");
}
/*
$result="SELECT * FROM $table ORDER BY ID DESC";
$result1 = mysqli_query($con, $result);
*/
 $g = mysql_query("SELECT * FROM comment"); 
$f=mysql_num_rows($g);
    if($f!=0){
$result= mysql_query( "SELECT * FROM comment  WHERE neid ='$neid' ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error());// 


/*
$row = mysqli_fetch_assoc($result1);
*/
while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}}

}
?> 

