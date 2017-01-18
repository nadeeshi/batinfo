

<?php 
//db conection
include ('../../database/dbconnect.php');
       
//delete query

$sql = "DELETE  FROM news_before WHERE nid = '" . $_GET['to_id'] . "';";
$dl=mysqli_query($con, $sql);
	
 //if the query is completed return to news insert page
if ($dl) {
				
    header('Location:../../view/news/news_insert.php');
	exit();
    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}

?>