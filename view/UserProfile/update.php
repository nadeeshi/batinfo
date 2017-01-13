<!DOCTYPE html>

<html lang="en">
<head>
  <title>nav1</title>
  <link href="css/bootstrap.css" rel="stylesheet">
 <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
  <link href="css/footer.css" rel="stylesheet">
  <script src="js/jquary.js"></script>
  <script src="js/bootstrapjs.js"></script>

   
    
</head>


<body>

    <div>
        <?php include '../../Assets/IncludedFiles/navbarTemplate.php'; ?>
    </div>

    <div class="container-fluid" style="padding-top:120px;">
    <div class="col-sm-8 col-sm-push-4 col-xs-12">
	   <h2> Your Profile Changes Updated Successfully</h2>
       <br>
       <?php
//session_start();

include_once '../../database/dbconnect.php';

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$id = $_SESSION['usr_id'];


$sql = "UPDATE researchers SET fname='$fname', mname='$mname', lname='$lname', email='$email' WHERE id=$id ";

if ($con->query($sql) === TRUE) {
    echo "<script>";
    echo "alert('Successfully profile updated!')";
    echo "</script>";
   	//header('location:profile.php?id=<?php echo $_SESSION['usr_id']');
   //	echo "<meta http-equiv='refresh' content='0'>";


       



} else {
    echo "<script>";
    echo "alert('Error profile updated!')";
    echo "</script>" . $conn->error;
}
?>





         

       
	   
</body>
</html>






