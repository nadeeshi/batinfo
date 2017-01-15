<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>delete reserach papers</title>

        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <script src="../../assets/JS/jquery.js"></script>



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
                    echo "<p class='msg'>Something Went Wrong!!!</p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Try Again</button></a>';
                }

                $paper_id_path = $_GET['paper_id_path']; // get the merged paper path and paper id with ^ symbol
                $explodes = explode('^', $paper_id_path); // split in to sepearate id and file path

                $paper_id = $explodes[0]; // get the paper id
                $paper = $explodes[1]; // get the paper path
                //$researcher_id = $_SESSION['usr_id'];


                $researcher_id = 6;
                $var = $researcher_id;
                $structure = "/wamp/www/batinfo/assets/$paper";

                $file = $structure;

                // delete the file from relavant folder/ directory
                if (!unlink($file)) {
                    echo "<p class='msg'>Something Went Wrong!!!</p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Try Again</button></a>';
                } else {
                // 
                    $query = "DELETE FROM research_papers WHERE paper_id='$paper_id'";

                    if (mysqli_query($con, $query)) {
                        
                    } else {
                        //echo nothing here...
                    }


                    if ($con->query($query) === TRUE) {
                        echo "<p class='msg'>Paper Succesfully Deleted<p>";
                        echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Back</button></a>';
                    } else {
                        echo "<p class='msg'>Something Went Wrong!!!</p>";
                        echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Try Again</button></a>';
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