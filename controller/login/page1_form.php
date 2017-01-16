<?php
session_start(); // Session starts here.
?>
<!DOCTYPE HTML>
<html>
 <head>
    <title>Register | BatsInfo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
          <!-- Bootstrap -->
        <link href="../../assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="../../assets/JS/bootstrap.min.js" rel="stylesheet" media="screen">
          <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="../../assets/CSS/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->

        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../../assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="../../assets/JS/bootstrap.min.js"></script>
       <script src="../../assets/JS/bootstrap.min.js"></script>
       <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet">
</head>
 

 </head>
 <body>

     <div class="public-background">
        <img src="../../assets/images/bat.jpg" width="100%" height="100%" style="opacity: 0.9;" >
     </div>
     <div class="container-fluid" >
     <?php include ("../../assets/IncludedFiles/mainnav.php") ?>
     </div>
     <div> 
     <div class="container" style="padding-top:100px; padding-bottom:150px;">
     <div class="row">
     <div class="col-md-4 col-md-offset-4 well" style="opacity: 0.935;">
            
     <div class="main">

     <span id="error">
     <!---- Initializing Session for errors ---->
     <?php
     
     /*if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
            $error = true;
            $name_error = "Name must contain only alphabets and space";
        }
         if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
            $error = true;
            $name_error = "Name must contain only alphabets and space"; 
        } */
        
        /*if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $email_error = "Please Enter Valid Email ID";
      


    

        }*/

        $fnameErr = $lnameErr = $emailErr =  "";
         $fname = $lname = $email = "";

     ?>

     </span>

     <form action="page2_form.php" method="post">
     <fieldset>
     <legend>Sign Up</legend>
     <div class="form-group">

     <label>Title </label>
     <select name="title">
     <option value="miss">Miss</option>
     <option value="mrs">Mrs</option>
     <option value="mr">Mr</option>
     <option value="prof">Prof</option>
     </select>
     
     </div>
     <div class="form-group">
     <label>First Name </label>
     <input name="fname" type="text"  required placeholder="First Name" class="form-control" />
     <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
     </div>
    <div class="form-group">
     <label>Middle Name </label>
     <input name="mname" type="text"  placeholder="Middle Name" class="form-control" />
     <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
     </div>
     <div class="form-group">
     <label>Last Name </label>
     <input name="lname" type="text" required placeholder="Last Name" class="form-control" / >
     <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
     </div>
     <div class="form-group">
     <label for="name">Gender</label><br>
     <input type="radio" name="gender" value="m" required   >Male </input><br>
     <input type="radio" name="gender" value="f" required  >Female </input>
     </div>
     <div class="form-group">
     <label>NIC </label>
     <input name="nic" type="text" required placeholder="NIC" class="form-control"  maxlength="10" pattern="(?=.*[v])(?=.*[V]).{10}">

    
     <!--<span class="text-danger"><?php if (isset($nic_error)) echo $nic_error; ?></span>-->
     </div>
     <div class="form-group">
     <label>Address </label>
     <input name="add1" type="text"  required placeholder="Street 1" class="form-control" />
     <input name="add2" type="text" placeholder="Street 2" class="form-control" / >
     <input name="city" type="text"  required placeholder="City" class="form-control" />
     </div>
     <div class="form-group">
     <label>Country</label>
     <input name="country" type="text" required  placeholder="Country" class="form-control" />
     </div>
     <div class="form-group">
     <label>Major In </label>
     <input name="major" type="text"   placeholder="Majoring In" class="form-control" />
     </div>
     <div class="form-group">
     <label>Email </label>
     <input name="email" type="email"  required placeholder="xxx@abc.com" class="form-control" />
     <!--<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>-->
     </div>
    <center>
     <input type="reset" value="Reset" />
     <input type="submit" value="Next" />
     </center>
     </form>
     </div>
     </div>
     
     </div>
     </fieldset>
     </form>
     </div>
     </div>
     <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("../../assets/IncludedFiles/footer.php") ?> </a>
    </div>
 </body>
</html>