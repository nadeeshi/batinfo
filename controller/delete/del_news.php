

<?php 

include ('../../database/dbconnect.php');

        
          
    //$id =  $_GET['id'];dbconnect.php

    $sql = "DELETE  FROM news_before WHERE nid = '" . $_GET['to_id'] . "';";
    $dl=mysqli_query($con, $sql);
	
	if ($dl) {
				//echo $ns_id;
	header('Location:../../view/news/news_insert.php');
	exit();

    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}

    
    

    
     ?>