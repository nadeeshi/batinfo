<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="../../assets/JS/bootstrap.min.js"></script>
    <link href="../../assets/css/navbar1n2.css" rel="stylesheet">

    <style>


li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>

</head>
<body>
<?php include "../../assets/IncludedFiles/mainnav.php" ;
include "../../assets/IncludedFiles/footer.php" ;
?>




<div class="container" style="padding-top:120px; padding-bottom:120px;">
  <div class="row">
    <div class="col-md-3">
      <ul style="list-style-type: none; margin: 0; padding: 0; width: 200px; background-color: #f1f1f1;">
        <li><a href='wsi.php'>Post your Article</a></li>
      </ul>
    </div>
  </div> 
  <br>
  <div class="row">
    <div class="col-md-3">
<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT title,content,link FROM articles ORDER BY pubdate DESC";
$result = $con->query($sql);
//echo '<div class="row">';
//echo '<div class="col-md-3">';

echo '<label style="font-size: 17px ;">Recent Articles</label>';
while($row = $result->fetch_assoc()) {
      $title=$row['title'];
      $content=$row['content'];
      $link=$row['link'];
      echo '<ul style="list-style-type: none; margin: 0; padding: 0; width: 200px; background-color: #f1f1f1;">';
      
      echo '<li>'.'<a target= "ifrm" href='. $link.'>'. $title.'</a>'.'</li>';
      echo '<div class="col-md-9" id="rest">';
      
      //echo  $row['content']; 
      $_SESSION['lnk']=$link;
      $_SESSION['cntnt']=$content;

      echo '</div>';
    }
    ?>
</ul>
 

  </div>
  <div id="top" class="col-md-9">
  <?php 
      $link=$_SESSION['lnk'];
      $content=$_SESSION['cntnt'];
      
      ?>
      <iframe src= $link name="ifrm" style="border:none;" width="90%" height="1200"> </iframe>
    
  </div>
</div>

  <div class="col-md-9" id='top'>
<?php 
//echo "title". $row['content']; ?>

</div>
</div>

</body>
</html>