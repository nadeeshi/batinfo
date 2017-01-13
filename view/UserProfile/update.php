<?php
session_start();

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
} else {
    echo "<script>";
    echo "alert('Error profile updated!')";
    echo "</script>" . $conn->error;
}
?>