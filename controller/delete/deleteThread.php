<?php
ob_start();
include("../../assets/includeFiles/connect.php");

if(isset($_GET['id'])!="")
{
    $sql=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM topics WHERE topic_id='$sql'");
    if($delete)
    {
        header("Location:forumTopics.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>