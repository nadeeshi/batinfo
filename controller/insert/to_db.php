<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/dbconnect.php');



		$ins_query="INSERT INTO photos (`location`, `caption`, `desc`,`r_id`)
		SELECT image, title, body, r_id FROM news_before
		WHERE nid = '" . $_GET['to_id'] . "';";
		$r1=mysqli_query($con,$ins_query) or die(mysql_error());
        
        $sql = "DELETE  FROM news_before WHERE nid = '" . $_GET['to_id'] . "';";

        mysqli_query($con,$sql); 
		
		if ($r1) {
				
	header('Location:../../view/news/news_insert.php');
	exit();

    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}

ob_end_flush();?>
