<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>insert a new bat</title>
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

        <style> </style>
    </head>
    <body>

        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <div class="height_default">


                <?php ?>

                <?php
                // include php check for missing data file
               

                // insert form data in to the bat_info table pass by insert.php form
                require_once('../../database/dbconnect.php');
            
            

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }else{
            
                if(isset($_FILES['image']['tmp_name'])){
                $file = $_FILES['image']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);
               


                move_uploaded_file($_FILES["image"]["tmp_name"], "../../assets/images/bphotos/" . $_FILES["image"]["name"]);

                $pic_path = "bphotos/" . $_FILES["image"]["name"];
                }


                $scientific_name = mysqli_real_escape_string($con, $_POST['scientific_name']);
                $bat_order = mysqli_real_escape_string($con, $_POST['bat_order']);
                $kingdom = mysqli_real_escape_string($con, $_POST['kingdom']);
                $genus = mysqli_real_escape_string($con, $_POST['genus']);
                $phylum = mysqli_real_escape_string($con, $_POST['phylum']);
                $family = mysqli_real_escape_string($con, $_POST['family']);
                $sub_family = mysqli_real_escape_string($con, $_POST['sub_family']);
                $bat_class = mysqli_real_escape_string($con, $_POST['bat_class']);
                $species = mysqli_real_escape_string($con, $_POST['species']);
                $population = mysqli_real_escape_string($con, $_POST['population']);
                $common_names = mysqli_real_escape_string($con, $_POST['common_names']);
                $synonyms = mysqli_real_escape_string($con, $_POST['synonyms']);
                $roost = mysqli_real_escape_string($con, $_POST['roost']);
                $conservation_status = mysqli_real_escape_string($con, $_POST['conservation_status']);
                $country_occurence = mysqli_real_escape_string($con, $_POST['country_occurence']);
                $locations = mysqli_real_escape_string($con, $_POST['locations']);
                $feeding = mysqli_real_escape_string($con, $_POST['feeding']);
                $breeding = mysqli_real_escape_string($con, $_POST['breeding']);
                $threats = mysqli_real_escape_string($con, $_POST['threats']);
                $conservation_action = mysqli_real_escape_string($con, $_POST['conservation_action']);
                $measurements = mysqli_real_escape_string($con, $_POST['measurements']);
                $other_details = mysqli_real_escape_string($con, $_POST['other_details']);


                $query = "INSERT INTO bat_info(scientific_name, bat_order, kingdom, genus, phylum, family, sub_family, bat_class,species,pic,common_names,synonyms,roost,locations,conservation_status,country_occurence,feeding,breeding,threats,
                conservation_action,measurements,other_details,population)
              
                VALUES ('$scientific_name', '$bat_order','$kingdom', '$genus', '$phylum', '$family', '$sub_family', '$bat_class', '$species','$pic_path', '$common_names', '$synonyms', '$roost', '$locations', '$conservation_status', '$country_occurence', '$feeding', '$breeding', '$threats', '$conservation_action', '$measurements', '$other_details','$population' )";



                }


                  
                    if (mysqli_query($con, $query)) {
                        mysqli_close($con);
                        //procceed if successful
                        echo "<p class='msg'>Bat Successfully Added</p>";

                        echo '<br><br><a href="../../view/insert/insert_form.php"><button class="my-button">Back</button></a>';
                    } else {

                        //try again if unsuccessful
                        echo "<p class='msg'>Error Occur! <p>";

                        echo '<br><br><a href="../../view/insert/insert_form.php"><button class="my-button">Try Again</button></a>';
                    }
                 
                ?>



            </div>


        </div>


        <!-- start footer -->

         <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
<?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>


    </body>
</html>