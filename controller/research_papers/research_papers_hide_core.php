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

          <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form insert-bat col-sm-11 col-xs-11">

            <div class="height_default_edit">


                <?php
                require_once('../../database/dbconnect.php');

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $paper_id = $_GET['paper_id'];

                $del_bit = 1;


                $query = "UPDATE research_papers SET del_bit='$del_bit' WHERE paper_id = '$paper_id'";

                mysqli_query($con, $query) or die("Something Went Wrong!!!");

                if ($con->query($query) === TRUE) {
                    echo "<p class='msg'>Paper Succesfully Hid<p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Back</button></a>';
                } else {
                    echo "<p class='msg'>Something Went Wrong!!!</p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_del_home.php"><button class="my-button">Try Again</button></a>';
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