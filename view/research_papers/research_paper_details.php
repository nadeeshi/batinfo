

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>research papers details</title>

        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
            
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style>
            .insert-bat {
            margin-left: 4% !important;
        }
            .form-control[disabled], fieldset[disabled] .form-control {
            cursor: default!important;
        }
        </style>
    </head>

    <body >
        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>
        <?php
        require_once('../../database/dbconnect.php');

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $research_papers = $_GET['id'];

        $result = mysqli_query($con, "SELECT * FROM research_papers WHERE paper_id= '$research_papers' ");

        $details = mysqli_fetch_array($result);

        if (!$details) {

            echo "<p class='msg'>Error Occur! <p>";

            echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
            exit();
        }

        mysqli_close($con);
        ?>

            <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form insert-bat">
             <div class="head-form">
                    <h2>Reasearch Paper Details</h2>
                </div>
            <form id="form" method="post" action="">
                <div class="form-group clearfix">
                    <label class="lbl " >Title</label>

                    <input type="text"   class="form-control " value="<?php echo $details['title'] ?>"  disabled />

                </div>

                <div class="form-group clearfix">
                    <label class="lbl " >Author</label>

                    <input type="text"  class="form-control " value="<?php echo $details['author'] ?>"  disabled />
                </div>
              

                <div class="form-group clearfix">
                    <label class="lbl" >Description</label>
                    <textarea class="form-control my-text" name="description" id="description" rows="4" cols="50"  disabled> <?php echo $details['description'] ?></textarea>

                </div>


                <div class="form-group clearfix">
                    <label class="lbl " >Research Area </label>

                    <input  class="form-control " value="<?php echo $details['area'] ?>"  disabled/>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl " >Research Category </label>

                    <input  class="form-control " value="<?php echo $details['category'] ?>"  disabled/>

                </div>
                <div class="form-group clearfix">

                    <div class="pdf-link">
                        <a target="_blank" class="pdf-link" href="../../assets/<?php echo $details['paper'] ?> ">Click Here to View the Research Paper</a>
                    </div>
                </div>

            </form>                

        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>
    </body>
</html>