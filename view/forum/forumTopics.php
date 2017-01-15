<?php 
require_once ("../../database/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>addThread</title>
	<link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../../assets/CSS/forum.css" rel="stylesheet" type="text/css">
	<link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
	<script src="../../assets/JS/jquery.js"></script>
    <script src="../../assets/JS/bootstrap.js"></script>
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
		<div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form ">
			<div class="row">
				<div class="col-xs-12">
					<a href="../../controller/insert/addThread.php">
						<button class="button">Add a new discussion topic</button>
					</a>
				</div>
			</div>
			<div class="row forum-research" style="padding: 1.5%; margin-left: 7%;" >
				<?php
					$sql= "SELECT topics.topic_id, topics.topic_subject, topics.topic_date, topics.topic_by, researchers.fname, researchers.lname FROM topics,researchers";
					$result= mysqli_query($db, $sql);

					echo "<table>";
			   		echo "<tr height='50'>";
			        echo "<th class='col-sm-8'> Topic </th>";
			        echo "<th class='col-sm-2'> Posted Date </th>";
			        echo "<th class='col-sm-2'> Posted by </th>";
			    	echo "</tr>";

			    	echo "<tr>";
			        foreach ($result as $user) {
			          	echo  "<td class='col-sm-8 col-xs-8' height='50'>";
			          	echo "<a style='color:black!important;' href='discussion.php?id=".$user['topic_id']."'>".$user['topic_subject']."</a>"." "."</td>";
			          	echo  "<td height='50' class='col-sm-1 col-xs-1'>";
			            echo $user['topic_date']." "."</td>";
			            echo "<td class='col-sm-3 col-xs-3'>";
			            echo $user['fname']." ".$user['lname']." "."</td>";
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