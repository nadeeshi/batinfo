<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>paper upload</title>

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

        <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">

            <?php
            include('../../database/dbconnect.php');
            if (!isset($_FILES['pdf']['tmp_name'])) {
                echo "<p class='msg'>Something Went Wrong!!!</p>";

                echo '<br><br><a href="../../view/research_papers/research_papers.php"><button class="my-button">Try Again</button></a>';
            } else {
                $researcher_id =  $_SESSION['usr_id'];

               

                $var = $researcher_id;

                $structure = "/xwampp/htdocs/batinfo/assets/research_papers/$var";

                //create a directory for each researcher id if not exist
                if (!is_dir($structure)) {
                    
                    mkdir($structure, 0777); // create dir
                    $file = $_FILES['pdf']['tmp_name'];
                    $paper_cont = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                    $paper_name = addslashes($_FILES['pdf']['name']);
                    $size = $_FILES['pdf']['size'];
                    $size = $size / 1024;
                    
                    //rename the existing file merging with random number
                    
                    $paper_default_name =  $_FILES["pdf"]["name"];
                    $new_paper_name = rand(1000,100000000).$_FILES["pdf"]["name"];
                    @rename($paper_default_name, $new_paper_names);
                    
                    //rename done

                    //move the file to dir
                    move_uploaded_file($_FILES["pdf"]["tmp_name"], "../../assets/research_papers/" . $var . "/" . $new_paper_name);

                    $location = "research_papers/" . $var . "/" . $new_paper_name;

                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    $description = $_POST['description'];
                    $area = $_POST['area'];
                    $category = $_POST['category'];

                    //insert the file to db
                    $query = mysqli_query($con, "INSERT INTO research_papers (paper,	title,author,researcher_id,area,description,category) VALUES('$location','$title','$author','$researcher_id','$area','$description','$category')");

                    echo "<p class='msg'>File Succesfully Uploaded<p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers.php"><button class="my-button">Back</button></a>';
                    exit();
                } else {
                    
              
                    $file = $_FILES['pdf']['tmp_name'];
                    $paper_cont = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                    $paper_name = addslashes($_FILES['pdf']['name']);
                    $size = $_FILES['pdf']['size'];
                    $size = $size / 1024;
                    
                    $paper_default_name =  $_FILES["pdf"]["name"];
                    $new_paper_name = rand(1000,100000000).$_FILES["pdf"]["name"];
                   
                    @rename($paper_default_name, $new_paper_name);

                    

                    move_uploaded_file($_FILES["pdf"]["tmp_name"], "../../assets/research_papers/" . $var . "/" . $new_paper_name);

                    $location = "research_papers/" . $var . "/" .$new_paper_name;

                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    $description = $_POST['description'];
                    $area = $_POST['area'];
                    $category = $_POST['category'];


                    $query = mysqli_query($con, "INSERT INTO research_papers (paper,	title,author,researcher_id,area,description,category) VALUES('$location','$title','$author','$researcher_id','$area','$description','$category')");

                    echo "<p class='msg'>File Succesfully Uploaded<p>";
                    echo '<br><br><a href="../../view/research_papers/research_papers.php"><button class="my-button">Back</button></a>';
                    exit();
                    
                }
            }
            ?>
        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>
    </body>
</html>