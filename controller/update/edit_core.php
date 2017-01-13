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
            if(isset($_FILES['image']['tmp_name'])){
                $file = $_FILES['image']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);
               


                move_uploaded_file($_FILES["image"]["tmp_name"], "../../assets/images/bat_prof_pic/" . $_FILES["image"]["name"]);

                $pic_path = "../../assets/images/bat_prof_pic/" . $_FILES["image"]["name"];
                
            }
            $path= $pic_path;
          
            $scientific_name = mysqli_real_escape_string($con, $_POST['scientific_name']);
            $bat_order = mysqli_real_escape_string($con, $_POST['bat_order']);
            $kingdom = mysqli_real_escape_string($con, $_POST['kingdom']);
            $genus = mysqli_real_escape_string($con, $_POST['genus']);
            $phylum = mysqli_real_escape_string($con, $_POST['phylum']);
            $family = mysqli_real_escape_string($con, $_POST['family']);
            $sub_family = mysqli_real_escape_string($con, $_POST['sub_family']);
            $bat_class = mysqli_real_escape_string($con, $_POST['bat_class']);
            $species = mysqli_real_escape_string($con, $_POST['species']);
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


            $query = "UPDATE bat_info SET 
                   
                   
                    bat_order='$bat_order',
                    kingdom='$kingdom',
                    genus='$genus',
                    phylum='$phylum', 
                    family= '$family',
                    sub_family='$sub_family',
                    bat_class='$bat_class',
                    species='$species',
                    pic='$path',
                    common_names='$common_names',
                    synonyms='$synonyms',
                    roost='$roost',
                    conservation_status='$conservation_status',
                    country_occurence='$country_occurence', 
                    locations= '$locations',
                    feeding='$feeding',
                    breeding='$breeding',
                    threats='$threats',
                    conservation_action='$conservation_action',
                    measurements='$measurements',
                    other_details='$other_details'

                    WHERE scientific_name = '$scientific_name'";

            mysqli_query($con, $query) or die("Something Went Wrong!!!");

            if ($con->query($query) === TRUE) {
                echo "<p class='msg'>Bat Succesfully Updated<p>";
                echo '<br><br><a href="../../view/delete_update/edit_delete_home.php"><button class="my-button">Back</button></a>';
            } else {
                echo "<p class='msg'>Something Went Wrong!!!</p>";
                echo '<br><br><a href="../../view/delete_update/edit_delete_home.php"><button class="my-button">Try Again</button></a>';

            }

            mysqli_close($con);


            
            ?>


        
        </div>
        </div>
            <div class="col-xs-10 col-xs-push-2">
                <?php include "../../assets/IncludedFiles/footer.php" ?>
            </div>
    </body>
</html>