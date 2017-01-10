


<?php
// define variables and set to empty values
$usernameErr = $usermailErr = $usermobileErr   = "";
$username = $usermail = $usermobile =   "";
$course = array();
//var_dump($_POST['gender']);
//exit;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $variables = array();
    $variables = initialize();
    $errors = array();
    $errors = validate_errors($variables);

    if (count($errors) == 0) {
        //database operation
        //exit;
    }
}
function clean($data) {
    $data = strip_tags(htmlspecialchars(stripslashes(trim($data))));
    //trim :- Strip whitespace (or other characters) from the beginning and end of a string
    //The stripslashes() function removes backslashes.Prevents XSS
    //htmlspecialchars :- Converts the predefined characters "<" (less than) and ">" (greater than) to HTML entities:< (less than) becomes &lt; and > (greater than) becomes &gt;Helps in preventing XSS
    //The strip_tags() function strips a string from HTML, XML, and PHP tags.
    return $data;
}

function initialize(){
    $var = array();
    $var['username'] = clean($_POST['username']);
    $var['usermail'] = clean($_POST['usermail']);
    $var['usermobile'] = clean($_POST['usermobile']);



    return $var;
}

function validate_errors($var) {    //is an array being passed into this function??have a look at arg of validateFirstName.
    $errors = array();

    $errors['username'] = validateUserName($var['username']);//should return error string or ''
    $errors['usermail'] = validateEmailId($var['usermail']);
    $errors['usermobile'] = validateMobileNo($var['usermobile']);


    return $errors;
}

function validateUserName($uname){

    if(empty($uname)){
        global $usernameErr;
        $usernameErr = "First name is required";
        return $usernameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $uname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $usernameErr;
        $usernameErr = "Only letters are allowed";
        return $usernameErr;
    } else {
        global $username;
        $username = $uname;
        return '';
    }
}

function validateEmailId($umail){

    if(empty($umail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $umail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $usermailErr;
        $usermailErr = "you have entered Invalid Email";
        return $usermailErr;
    } else {
        global $usermail;
        $usermail = $umail;
        return '';
    }
}

function validateMobileNo($umobile) {

    if(empty($umobile)) {
        global $usermobileErr;
        $usermobileErr = "Mobile NO is required";
        return $usermobileErr;
    } else if (!preg_match("/^\d{10}$/", $umobile)){ // checks if username contains only letters and digits
        global $usermobileErr;
        $usermobileErr = "you have entered Invalid Mobile Number";
        return $usermobileErr;
    } else {
        global $usermobile;
        $usermobile = $umobile;
        return '';
    }
}







//renderform();



?>



<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>
    <style>
        .error {color: #FF0000;}
    </style>

    <style>
        .error {color: #FF0000;}
    </style>

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: none;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

    </style>

    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />





</head>



<body>
<?php include("../../assets/includedFiles/template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Researchers Details</h1>
                <h1 class="page-subhead-line">All Member Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Researchers</h4>
                        <div style="margin-top: 20px;">

                            <!--add new Researcher-------------------------------------------------------->
                            <div class="display">

                                <!--<form action="insertResearchers.php" method="post" name="insertform">
                                    <div class="col-xs-12">
                                        <label for="name" id="preinput" class="col-xs-5"> RESEARCHER NAME : </label>
                                        <input type="text" name="username" required placeholder="Enter your name" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label  for="email" id="preinput" class="col-xs-5"> EMAIL ID : </label>
                                        <input type="email" name="usermail" required placeholder="Enter your Email" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="mobile" id="preinput" class="col-xs-5"> MOBILE NUMBER : </label>
                                        <input type="text" name="usermobile" required placeholder="Enter your mobile number" id="inputid" class="col-xs-7"/>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>-->
                                <p><span class="error">* required field.</span></p>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="col-xs-12">
                                        <label for="firstname" class="col-xs-5">Researcher Name:</label>
                                        <input type="text" name="username"  required id="inputid" class="col-xs-6" value="<?php echo $username; ?>" /><span class="error">* <?php echo $usernameErr; ?></span><br/><br/></div>
                                    <div class="col-xs-12">
                                        <label for="usermail" class="col-xs-5">Email:</label>
                                        <input type="text" name="usermail" id="inputid" required class="col-xs-6"  value="<?php echo $usermail; ?>" /><span class="error"> <?php echo $usermailErr; ?></span><br/><br/></div>
                                    <div class="col-xs-12">
                                        <label for="usermobile" class="col-xs-5">Mobile No:</label>
                                        <input type="text" name="usermobile" id="inputid" required  class="col-xs-6" value="<?php echo $usermobile; ?>" /><span class="error">* <?php echo $usermobileErr; ?></span><br/><br/></div>

                                    <input type = "submit" value="Submit" name="submit">
                                </form>

                                <?php
                                echo "<h2>New Input:</h2>";
                                echo "username:" . $username;
                                echo "<br>";
                                echo "usermail:" . $usermail;
                                echo '<br>';
                                echo "mobilno:" . $usermobile;
                                echo '<br>';


                                ?>




                                <?php
                                ob_start();
                                include("../../assets/includedFiles/connect.php");

                                /*$username=($_POST['username']);
                                $usermail=($_POST['emailid']);
                                $usermobile=($_POST['mobileno']);
                                $password=($_POST['password']);*/


                                if(($username != '' ) && ($usermail != '') && ($m=$usermobile != '')){
                                    $update=mysql_query("INSERT INTO researcher_details(username,emailid,mobileno,created)VALUES
                                      ('$username','$usermail','$usermobile',now())");

                                    if($update)
                                    {
                                        //$msg="Successfully Updated!!";
                                        //echo "<script type='text/javascript'>alert('$msg');</script>";
                                        // header('Location:adminDetails.php');
                                    }
                                    else
                                    {
                                        $errormsg="Something went wrong, Try again";
                                        echo "<script type='text/javascript'>alert('$errormsg');</script>";
                                    }
                                }

                                ob_end_flush();
                                ?>






                            </div>
                            <!---close add new Researcher--------------------------------------------------------->




                        </div>
                    </div>









                </div>
            </div>


            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of Researchers
                    </div>

                    <div class="panel-body">

                        <!-----view Researchers details------------------------------------------>

                        <?php
                        include('../../assets/includedFiles/connect.php');
                        $select=mysqli_query($bd,"SELECT * FROM researcher_details order by id desc");
                        //$select=mysql_query("SELECT * FROM researcher_details order by id desc");
                        $i=1;
                        ?>

                        <div class="display">

                            <table>
                                <tr>
                                    <th>RESEACHER  NAME : </th>
                                    <th>EMAIL : </th>


                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>


                                <?php



                        while($userrow=mysqli_fetch_array($select))
                        {
                            $id=$userrow['id'];
                            $username=$userrow['username'];
                            $usermail=$userrow['emailid'];
                            $usermobile=$userrow['mobileno'];
                            $created=$userrow['created']
                            ?>

                                <tr>
                                    <td><?php echo $username; ?></td>

                                    <td><?php echo $usermail;?></td>




                                    <td><a href="../update/editResearchers.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> Edit </span></a></td>
                                    <td><a href="../delete/deleteResearchers.php?id=<?php echo $id; ?>"
                                       onclick="return confirm('Are you sure you wish to delete this Record?');">
                                        <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a></td>
                                </tr>




                        <?php } ?>

                            </table>


                        <!---close new researcher------------------------------------------------------>

                    </div>
                </div>
            </div>


        </div>



    </div>
</div>
</div>



<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>



</body>
</html>
