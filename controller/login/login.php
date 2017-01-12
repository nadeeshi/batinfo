<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once '../../database/dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM researchers WHERE email = '" . $email. "' and password = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['fname'];
        header("Location: ../phpPages/researcherHomepage.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../../assets/JS/bootstrap.min.js"></script>
    <link href="../../assets/CSS/bootstrap.min.css">
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet">
          <!-- Bootstrap -->
          <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="../../assets/JS/bootstrap.min.js" rel="stylesheet" media="screen">
          <!--Google Fonts-->
          <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="../../assts/CSS/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->

        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
        <div>
        <?php include("../../assets/IncludedFiles/mainnav.php")?>
        </div>

<div class="container" style="padding-top:100px; padding-bottom:100px;"">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="page1_form.php">Sign Up Here</a>
        </div>
    </div>
    <div class="push"></div>
</div>
    <!--get footer -->
    <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../../assets/IncludedFiles/footer.php") ?> </a>
    </div>


<script src="../../assets/JS/jquery.js"></script>
<script src="../../assets/JS/bootstrap.min.js"></script>
</body>
</html>