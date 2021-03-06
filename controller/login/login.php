<?php
session_start();
/*echo '<pre>';
        var_dump($_SESSION);
        var_dump($_SESSION['usr_id']);
        echo '</pre>';
        die();*/

if(isset($_SESSION['usr_id'])!="") {
    header("Location: ../graph/graph.php");
}

include_once '../../database/dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM researchers WHERE email = '" . $email. "' and password = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['researcher_id'];
        $_SESSION['usr_name'] = $row['fname'];
        header("Location: ../graph/graph.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | BatsInfo</title>
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
        <!--CSS-->

        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../../assets/JS/bootstrap.min.js"></script>
        <style>
        .footer-container {position:fixed;
            bottom:0;}
        </style>
</head>
<body>
    <div class="public-background">
        <img src="../../assets/images/bat.jpg" width="100%" height="100%" >
    </div>
    <div>
        <?php include("../../assets/IncludedFiles/mainnav.php") ?>
    </div>

    <div class="container" style="padding-top:10%;>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well" style="opacity:0.925;">
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
                    <div class="form-group" style="text-align: center;">    
                        New User? <a href="page1_form.php">Sign Up Here</a>
                    </div>
                    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                </fieldset>
            </form>
            
        </div>
        </div>
    </div>  
 <div class="col-xs-12 footer-container" >
    <?php include "../../assets/includedFiles/footer.php" ?>
</div>


</body>
</html>