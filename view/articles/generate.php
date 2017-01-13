<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT title,content,link FROM articles ORDER BY pubdate DESC";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()) {
    	$title=$row['title'];
    	$content=$row['content'];
    	$link=$row['link'];
		$myFile = $row['link'];    
		$fh = fopen($myFile, 'w') or die("error");  
		$stringData = "you html code php code goes here";   
		fwrite($fh, $stringData);}
?>
</body>
</html>
