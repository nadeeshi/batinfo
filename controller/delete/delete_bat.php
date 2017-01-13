<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit bats</title>
        
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link rel="stylesheet" href="../../assets/CSS/insert_form.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/footer.css" rel="stylesheet">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/bootstrapjs.js"></script>
        <script type ="text/javascript" src="../../assets/JS/multi_step_form.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/validate_text_fields.js"></script>
       
        <style></style>
       


    </head>
    <body>

        <div>
              <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
          <div class="height_default_edit">

          
            <?php
            require_once('../../database/dbconnect.php');

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        
            $scientific_name = $_GET['scientific_name'];
           
            $del_bit = 1;


            $query = "UPDATE bat_info SET del_bit='$del_bit' WHERE scientific_name = '$scientific_name'";

            mysqli_query($con, $query) or die("Something Went Wrong!!!");

            if ($con->query($query) === TRUE) {
                echo "<p class='msg'>Bat Succesfully Deleted<p>";
                echo '<br><br><a href="../../view/delete_update/edit_delete_home.php"><button class="my-button">Back</button></a>';
            } else {
                echo "<p class='msg'>Something Went Wrong!!!</p>";
                echo '<br><br><a href="../../view/delete_update/edit_delete_home.php"><button class="my-button">Try Again</button></a>';

            }

            mysqli_close($con);


            
            ?>


        
        </div>
        </div>
            <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
                <?php include "../../assets/IncludedFiles/footer.php" ?>
            </div>
    </body>
</html>