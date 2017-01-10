<?php
ob_start();
include("../../assets/includeFiles/connect.php");
$sql="SELECT * FROM topics
WHERE topics.topic_id = " . mysqli_real_escape_string($bd, isset($_GET['id']) ? $_GET['id'] : null);
$result= mysqli_query($bd, $sql);
$row = mysqli_fetch_assoc($result);
$id=mysqli_real_escape_string($bd, isset($_GET['id']) ? $_GET['id'] : null);

if(isset($sql)!="")
{
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