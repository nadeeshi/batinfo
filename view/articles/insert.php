<?php
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $img1 = mysqli_real_escape_string($conn, $_POST['img1']);
    $img2 = mysqli_real_escape_string($conn, $_POST['img2']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $sql = "INSERT INTO articles (title, content, img1, img2, link)
VALUES ($title, $content, $img1, $img2, $link)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>