<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>delete bats</title>

        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
     
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
       
    </head>
    <body>

        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

               <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form insert-bat col-sm-11 col-xs-11">

            <div class="height_default_edit">


                <?php
                require_once('../../database/dbconnect.php');

                if (mysqli_connect_errno()) {
                    echo "<p class='msg'><h3>Something Went Wrong!!!</h3></p>";
                    echo '<br><br><a href="../../view/delete_update/delete_home.php"><button class="my-button">Try Again</button></a>';
                }

                $bat_sn_path = $_GET['bat_sn_path']; // get the merged image path and image id with ^ symbol
                $explodes = explode('^', $bat_sn_path); // split in to sepearate path and scientific name

                $pic_path = $explodes[0]; // get the image path
                $scientific_name = $explodes[1]; // get the bat scientific name


                $researcher_id = $_SESSION['usr_id'];
                $var = $researcher_id;
                $structure = "../../assets/images/$pic_path";

                $file = $structure;

                // delete the image from relavant folder/ directory
                if (!unlink($file)) {
                        echo "<p class='msg'><h3>Something Went Wrong!!!</h3></p>";
                    echo '<br><br><a href="../../view/delete_update/delete_home.php"><button class="my-button">Try Again</button></a>';
                } else {
                    // 
                    $query = "DELETE FROM bat_info WHERE scientific_name='$scientific_name'";

                    if (mysqli_query($con, $query)) {
                        
                    } else {
                        //echo nothing here...
                    }


                    if ($con->query($query) === TRUE) {
                        echo "<p class='msg'><h3>Bat Succesfully Deleted<h3><p>";
                        echo '<br><br><a href="../../view/delete_update/delete_home.php"><button class="my-button">Back</button></a>';
                    } else {
                         echo "<p class='msg'><h3>Something Went Wrong!!!</h3></p>";
                        echo '<br><br><a href="../../view/delete_update/delete_home.php"><button class="my-button">Try Again</button></a>';
                    }
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