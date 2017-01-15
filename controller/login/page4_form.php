<!DOCTYPE HTML>
<html>
<title> Register | BatsInfo </title>
 <head>
 <meta content="width=device-width, initial-scale=1.0" name="viewport" >
          <!-- Bootstrap -->
        <link href="../../assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="../../assets/js/bootstrap.min.js" rel="stylesheet" media="screen">
          <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->
        
        <script src="../../assets/js/jquary.js"></script>
        <script src="../../assets/js/bootstrapjs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../../assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="../../assets/CSS/js/bootstrap.min.js"></script>
       <script src="../../assets/CSS/js/bootstrap.min.js"></script>
       <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet">
 </head>
 <body>
 <div class="public-background">
    <img src="../../assets/images/bat.jpg" width="100%" height="100%" style="opacity: 0.9;" >
  </div>
  <div class="col-xs-12 body-content">
 <div class="container-fluid" >
 <?php include ("../../assets/IncludedFiles/mainnav.php") ?> 
 </div>
 <div class="container" style="padding-top:100px; padding-bottom:150px;">
 <div class="col-md-4 col-md-offset-4 well" style="opacity:0.925;">
 <div class="main">
 <h2></h2>
 <?php
 session_start();
 if (isset($_POST['other'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['q1name'])
 || empty($_POST['q1ins'])
 || empty($_POST['q1year'])){ 
 // Setting error for page 3.
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page2_form.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection,"project" ); // Storing values in database.
 $query = "INSERT INTO researchers (title,fname,mname,lname,gender,nic,add1,add2,city,country,major,email) VALUES('$title','$fname','$mname','$lname','$gender','$nic','$add1','$add2','$city','$country','$major','$email');";
  $query .= "INSERT INTO qualifications (q1name,q1ins,q1year,q2name,q2ins,q2year,other) values('$q1name','$q1ins','$q1year','$q2name','$q2ins','$q2year','$other');";
 if (mysqli_multi_query($connection,$query)) {
 echo '<p><span id="success"><center><b style="font-size:16px;">Request Submitted successfully !</b></center></span></p>';
 echo '<p style="font-size:16px;"> Your qualifications are being evaluated. You will recieve a password to your email provided soon. </p>';

 } else {
 echo("Error description: " . mysqli_error($connection));
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 } else {
 header("location: page1_form.php"); // Redirecting to first page.
 }
 ?>
 </div>
 </div>
 </div>
  <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../../assets/IncludedFiles/footer.php") ?> </a>
</div>
 </body>
</html>
