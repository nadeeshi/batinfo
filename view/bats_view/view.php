
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>view bats</title>
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/view_css.css"/>
  
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style>body{background-color: beige;}</style>
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

        $scientific_name = $_GET['scientific_name'];// get the scientific name as id

        $result = mysqli_query($con, "SELECT * FROM bat_info WHERE scientific_name= '$scientific_name' ");

        $details = mysqli_fetch_array($result);

        if (!$details) {

            echo "<p class='msg'>Error Occur! <p>";

            echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
            exit();
        }

        mysqli_close($con);
        ?>

        <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form edit-form">
            <div class="head-form">
                <h2><?php echo $details['scientific_name'] ?></h2>
                <div class="image"> 
                    <?php
                    $path = $details['pic'];
                    $path = "../../assets/images/" . $path;
                    ?>
                    <img size="50" src="<?php echo $path; ?>"/>
                </div>
            </div>
            <form id="form" method="post" action="">
                <div class="form-group clearfix">
                    <label class="lbl " >Order</label>

                    <input type="text"  id="bat_order" name="bat_order" class="form-control " value="<?php echo $details['bat_order'] ?>"  disabled />

                </div>

                <div class="form-group clearfix">
                    <label class="lbl " >Kingdom</label>

                    <input type="text"  id="kingdom" name="kingdom" class="form-control " value="<?php echo $details['kingdom'] ?>"  disabled />

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Genus</label>

                    <input class="required form-control " id="genus" name="genus" type="text" value="<?php echo $details['genus'] ?>"  disabled/>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Phylum</label>

                    <input id="phylum" name="phylum" type="text" class="form-control " value="<?php echo $details['phylum'] ?>" disabled/>

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Family </label>

                    <input id="family" name="family" type="text" class="form-control " value="<?php echo $details['family'] ?>"  disabled/>

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Sub Family</label>

                    <input class=" form-control " id="sbfamily" name="sub_family" type="text" value="<?php echo $details['sub_family'] ?>"  disabled/>

                </div>

                <div c lass="form-group clearfix">
                    <label class="lbl" for="">Class</label>

                    <input id="bat_class" name="bat_class" type="text" class="form-control " value="<?php echo $details['bat_class'] ?>"  disabled/>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl " for="">Species</label>

                    <input id="species" name="species" type="text" class="form-control " value="<?php echo $details['species'] ?>"  disabled/>

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Common Name(s)</label>

                    <textarea class="form-control my-text " id="common_names" name="common_names" rows="5" cols="50"  disabled><?php echo $details['common_names'] ?></textarea>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Synonyms</label>

                    <textarea class="form-control my-text" id="synonyms" name="synonyms" rows="5" cols="50"  disabled><?php echo $details['synonyms'] ?></textarea>

                </div>


                <div class="form-group clearfix">
                    <label class="lbl " for="">Roosts Types</label>
                    <textarea class="form-control my-text " id="roost" name="roost" rows="5" cols="50"  disabled><?php echo $details['roost'] ?></textarea>


                </div>
                <div class="form-group clearfix">
                    <label class="lbl" for="">Conservation Status</label>

                    <input id="conservation_status" name="conservation_status" type="text" class=" form-control" value="<?php echo $details['conservation_status'] ?>"  disabled/>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Countries Occurrence</label>

                    <textarea class="form-control my-text " id="country_occurence" name="country_occurence" rows="5" cols="50"  disabled><?php echo $details['country_occurence'] ?></textarea>


                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Diet & Feeding</label>

                    <textarea class="form-control my-text " id="feeding" name="feeding" rows="5" cols="50"  disabled> <?php echo $details['feeding'] ?> </textarea>


                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Breeding & Habbits</label>

                    <textarea class="form-control my-text " id="breeding" name="breeding" rows="5" cols="50"  disabled> <?php echo $details['breeding'] ?> </textarea>
                </div>

                <div class="form-group clearfix">
                    <label class=" lbl" for="">Major Threats  </label>

                    <textarea class="form-control my-text " id="threats" name="threats" rows="5" cols="50"  disabled> <?php echo $details['threats'] ?> </textarea>

                </div> 
                <div class="form-group clearfix">
                    <label class=" lbl" for="">Conservation Actions</label>

                    <textarea class="form-control my-text " id="conservation_action" name="conservation_action" rows="5" cols="50" disabled> <?php echo $details['conservation_action'] ?> </textarea>

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Measurements</label>

                    <textarea class="form-control my-text " id="measurements" name="measurements" rows="5" cols="50"  disabled> <?php echo $details['measurements'] ?> </textarea>

                </div>
                <div class="form-group clearfix">
                    <label class=" lbl " for="">Other Details</label>

                    <textarea class="form-control my-text " id="other_details" name="other_details" rows="5" cols="50" disabled> <?php echo $details['other_details'] ?> </textarea>

                </div>
            </form>                
            <div class="col-xs-8">
                <button onclick="window.location.href = 'bats_view.php'" class="my-button submit_btn_edit" id ="myBtn">Back</button>

            </div>

        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>
    </body>
</html>