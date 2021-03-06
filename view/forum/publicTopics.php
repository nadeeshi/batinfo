<?php 
require_once ("../../database/dbconnect.php");
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
	<div class="public-background">
		<img src="../../assets/images/bat.jpg" width="100%" height="100%" >
	</div>
	<div>
		<div>
			<?php include '../../assets/includedFiles/mainnav.php' ?>
		</div>
		<div class="col-xs-12 body-content">
			<div class="public-thread-content public-div-content col-xs-10">
				<div class="col-xs-11 insert-form form-public">
					<div class="row" style="padding: 1.5%">
						<?php
			                $sql= "SELECT topics.topic_id, topics.topic_subject, topics.topic_date, topics.topic_by, researchers.fname, researchers.lname FROM topics join researchers on topic_by = researchers.researcher_id order by topic_date DESC";
			                
			                $sql_to_get_data = mysqli_query($con,"SELECT * FROM topics where admin_by>''");


			                $result= mysqli_query($con, $sql);

			                echo "<table>";
			                echo "<tr height='50'>";
			                echo "<th class='col-sm-6'> Topic </th>";
			                echo "<th class='col-sm-2'> Posted Date </th>";
			                echo "<th class='col-sm-2'> Posted by </th>";
			                echo "<th class='col-sm-2'> </th>";
			                echo "</tr>";

			                echo "<tr>";
			                foreach ($result as $user) {
			                    echo  "<td class='col-sm-9 col-xs-9' height='50'>";
			                    echo "<a style='color:black!important;' href='publicDiscussion.php?id=".$user['topic_id']."'>".$user['topic_subject']."</a>"." "."</td>";
			                    echo  "<td height='50' class='col-sm-2 col-xs-2'>";
			                    echo $user['topic_date']." "."</td>";
			                    echo "<td class='col-sm-2 col-xs-2'>";
			                    echo ((trim($user['topic_by'])=='') ? "Admin" : ($user['fname']." ".$user['lname']." "))."</td>";
			                    echo "</tr>";
			                }

			                echo "<tr>";
			                foreach ($sql_to_get_data as $user) {
			                    echo  "<td class='col-sm-9 col-xs-9' height='50'>";
			                    echo "<a style='color:black!important;' href='publicDiscussion.php?id=".$user['topic_id']."'>".$user['topic_subject']."</a>"." "."</td>";
			                    echo  "<td height='50' class='col-sm-2 col-xs-2'>";
			                    echo $user['topic_date']." "."</td>";
			                    echo "<td class='col-sm-2 col-xs-2'>";
			                    echo "Admin </td>";
			                    echo "</tr>";   
			                }

			                echo "</table>";
                		?>
					</div>
				</div>
			</div>
		</div>
	</div>

	


	<!-- start footer -->

	<div>
	    <div class="col-xs-12 ">
	      <?php include "../../assets/includedFiles/footer.php" ?>
	    </div>  
  	</div>


	<!-- end of footer -->
</body>
</html>