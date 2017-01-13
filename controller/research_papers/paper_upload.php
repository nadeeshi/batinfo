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

            <?php
            include('../../database/dbconnect.php');
            if (!isset($_FILES['pdf']['tmp_name'])) {
                echo "<p class='msg'>Something Went Wrong!!!</p>";
                echo '<br><br><a href="../../view/research_papers/research_papers.php"><button class="my-button">Try Again</button></a>';
            } else {

                $file = $_FILES['pdf']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                $image_name = addslashes($_FILES['pdf']['name']);
                $size = $_FILES['pdf']['size'];
                $size = $size / 1024;


                move_uploaded_file($_FILES["pdf"]["tmp_name"], "../../assets/research_papers/" . $_FILES["pdf"]["name"]);

                $location = "../../assets/research_papers/" . $_FILES["pdf"]["name"];

                $title = $_POST['title'];
                $author = $_POST['author'];
                $rid = $_POST['rid'];
                $description= $_POST['description'];
                
                $area = $_POST['area'];
                $category = $_POST['category'];
               

                $query= mysqli_query($con, "INSERT INTO research_papers (paper,	title,author,researcher_id,area,description,category) VALUES('$location','$title','$author','$rid','$area','$description','$category')");
                
                echo "<p class='msg'>File Succesfully Uploaded<p>";
                echo '<br><br><a href="../../view/research_papers/research_papers.php"><button class="my-button">Back</button></a>';
                exit();
            }
            ?>
        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>
    </body>
</html>