<?php 
require_once ("../../database/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>addThread</title>
	<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">
	<link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
	<script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
  	<style type="text/css">
	    table tr:nth-child(even) {
	        background-color: #e1e1d0;
	    }
	    table tr:nth-child(odd) {
	        background-color: white;
	    }
	</style>
</head>
<body>
	<div>
		<?php include '../../assets/includedFiles/navbarTemplate.php' ?>
	</div>
		<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
			<div class="row">
				<div class="col-xs-12">
					<a href="../../controller/insert/addThread.php">
						<button class="button">Add a new discussion topic</button>
					</a>
				</div>
			</div>
			<div class="row" style="padding: 1.5%">
				<?php
					$sql= "SELECT topic_id, topic_subject, topic_date, topic_by FROM topics";
					$result= mysqli_query($db, $sql);

					echo "<table>";
			   		echo "<tr height='50'>";
			        echo "<th class='col-sm-8'> Topic </th>";
			        echo "<th class='col-sm-2'> Posted Date </th>";
			        echo "<th class='col-sm-2'> Posted by </th>";
			    	echo "</tr>";

			    	echo "<tr>";
			        foreach ($result as $user) {
			          	echo  "<td class='col-sm-9 col-xs-9' height='50'>";
			          	echo "<a href='discussion.php?id=".$user['topic_id']."'>".$user['topic_subject']."</a>"." "."</td>";
			          	echo  "<td height='50' class='col-sm-2 col-xs-2'>";
			            echo $user['topic_date']." "."</td>";
			            echo "<td class='col-sm-2 col-xs-2'>";
			            echo "<a href=#>siguisgiwugiu</a>"." "."</td>";
			        echo "</tr>";   
					}	
					echo "</table>";
				?>
			</div>
		</div>
	


	<!-- start footer -->

	<div>
	    <div class="col-sm-10 col-sm-push-2 col-xs-12 ">
	      <?php include "../../assets/includedFiles/footer.php" ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>