<?php 
session_start();

$title = $_SESSION['ttl'];
$link = $_SESSION['lnk'];
$content = $_SESSION['cntnt'];
 $img1 = $_SESSION['mg1'];
 $name = $_SESSION['nme'];
 $status = $_SESSION['stts'];

$conn = mysqli_connect('localhost', 'root', '', 'projetc');
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }

$myfile = fopen("$link", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $title);
$txt = "Jane Doe\n";
fwrite($myfile, $content);
fclose($myfile);
 ?>