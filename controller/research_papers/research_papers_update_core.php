<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>upadate reserach papers</title>

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
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $size = $_FILES['pdf']['size'];

                $researcher_id = $_SESSION['usr_id'];



                if ($size <= 0) {
                    $location = mysqli_real_escape_string($con, $_POST['paper']);
                } elseif ($size > 0) {

                    $location = mysqli_real_escape_string($con, $_POST['paper']);
                    $structure = "../../assets/$location";

                    $file = $structure;

                    // delete the image from relavant folder/ directory before insert new image
                    if (!unlink($file)) {
                        echo "<p class='msg'>Something Went Wrong!!!</p>";
                        echo '<br><br><a href="../../view/delete_update/delete_home.php"><button class="my-button">Try Again</button></a>';
                    } else {


                        $file = $_FILES['pdf']['tmp_name'];
                        $image = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                        $image_name = addslashes($_FILES['pdf']['name']);
                        $size = $_FILES['pdf']['size'];
                        $size = $size / 1024;


                        move_uploaded_file($_FILES["pdf"]["tmp_name"], "../../assets/research_papers/" . $researcher_id . "/" . $_FILES["pdf"]["name"]);

                        $location = "research_papers/" . $researcher_id . "/" . $_FILES["pdf"]["name"];
                    }
                }
                $paper_id = mysqli_real_escape_string($con, $_POST['paper_id']);

                $title = mysqli_real_escape_string($con, $_POST['title']);
                $author = mysqli_real_escape_string($con, $_POST['author']);
                $area = mysqli_real_escape_string($con, $_POST['area']);
                $description = mysqli_real_escape_string($con, $_POST['description']);
                $category = mysqli_real_escape_string($con, $_POST['category']);


                $query = "UPDATE research_papers SET 
                   
                   
                    paper='$location',
                    title='$title',
                    author='$author',
                    area='$area', 
                    description= '$description',
                    category='$category'
                   

                    WHERE paper_id = '$paper_id'";

                mysqli_query($con, $query) or die("Something Went Wrong!!!");

                if ($con->query($query) === TRUE) {
                    echo "<p class='msg'>Paper Succesfully Updated<p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_update_home.php"><button class="my-button">Back</button></a>';
                } else {
                    echo "<p class='msg'>Something Went Wrong!!!</p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers_update_home.php"><button class="my-button">Try Again</button></a>';
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