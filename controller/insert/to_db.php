<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');

$status = "";
/*
dbconnect.php
 $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "test2";
        $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
        if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}*/
		
		//echo $_GET['to_id'];
		$ins_query="INSERT INTO photos (`location`, `caption`, `desc`)
		SELECT image, title, body FROM news_before
		WHERE nid = '" . $_GET['to_id'] . "';";
		$r1=mysqli_query($con,$ins_query) or die(mysql_error());
        
       /* $sql = "CREATE TRIGGER MysqlTrigger AFTER INSERT ON photos DELETE  FROM news_before WHERE nid = NEW.'" . $_GET['to_id'] . "';";*/
         $sql = "DELETE  FROM news_before WHERE nid = '" . $_GET['to_id'] . "';";

        mysqli_query($con,$sql); 
		
		if ($r1) {
				//echo $ns_id;
	header('Location:../../view/news/news_insert.php');
	exit();

    
} else {
    echo "Error: " . $ins_query . "<br>" . mysqli_error($con);
}

ob_end_flush();?>
