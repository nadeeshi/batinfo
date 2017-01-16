
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit bats</title>
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/edit_form_css.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/validate_text_fields.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style></style>
    </head>

    <body >
        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form edit-form">
            <div class="head-form">
                <h2>Edit Bats Details</h2>
            </div>

            <?php
            require_once('../../database/dbconnect.php');

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $scientific_name = $_GET['id'];

            $result = mysqli_query($con, "SELECT * FROM bat_info WHERE scientific_name= '$scientific_name' ");

            $details = mysqli_fetch_array($result);

            if (!$details) {
                // printf("Error: %s\n", mysqli_error($dbc));
                echo "<p class='msg'>Error Occur! <p>";

                echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
                exit();
            }

            mysqli_close($con);
            ?>



            <form id="form" method="post" action="../../controller/update/edit_core.php" enctype="multipart/form-data">


                <div class="form-group clearfix">
                    <div>

                        <a class="link" onclick="return myFunction();" >
                            <span class="glyphicon_my glyphicon glyphicon-pencil " ><span class="edit">Edit</span></span>

                            <!-- button, make disabled text fields editable -->
                        </a>
                    </div>


                    <!--print curretnt bat`s name -->


                    <p class="lbl sname_control">  <?php echo $details['scientific_name'] ?></p>


                    <!-- hidden text field to send the scientific_name to update form-->
                    <input type="hidden"  id="sname" name="scientific_name" value="<?php echo $details['scientific_name'] ?>" required />
                    <div class="image"> 

                        <?php
                        $path = $details['pic'];
                        $path = "../../assets/images/" . $path;
                        ?>
                        <input type="hidden"  id="pic_path" name="pic_path" value="<?php echo $details['pic'] ?>"   />
                        <img src="<?php echo $path; ?>"/>
                    </div>

                </div>


                <div class="form-group clearfix">
                    <label class="lbl " >Order<span class="red-star" >*</span></label>

                    <input type="text"  id="bat_order" name="bat_order" class="form-control " value="<?php echo $details['bat_order'] ?>" required disabled />


                </div>

                <div class="form-group clearfix">
                    <label class="lbl " >Kingdom<span class="red-star" >*</span></label>

                    <input type="text"  id="kingdom" name="kingdom" class="form-control " value="<?php echo $details['kingdom'] ?>" required disabled />


                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Genus<span class="red-star" >*</span></label>

                    <input class="required form-control " id="genus" name="genus" type="text" value="<?php echo $details['genus'] ?>" required disabled/>

                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Phylum<span class="red-star" >*</span></label>

                    <input id="phylum" name="phylum" type="text" class="form-control " value="<?php echo $details['phylum'] ?>" disabled/>

                </div>


                <div class="form-group clearfix">
                    <label class="lbl " for="">Family<span class="red-star" >*</span> </label>

                    <input id="family" name="family" type="text" class="form-control " value="<?php echo $details['family'] ?>" required disabled/>

                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Sub Family<span class="red-star" >*</span></label>

                    <input class=" form-control " id="sbfamily" name="sub_family" type="text" value="<?php echo $details['sub_family'] ?>" required disabled/>

                </div>

                <div c lass="form-group clearfix">
                    <label class="lbl" for="ame">Class<span class="red-star" >*</span></label>

                    <input id="bat_class" name="bat_class" type="text" class="form-control " value="<?php echo $details['bat_class'] ?>" required disabled/>

                </div>


                <div class="form-group clearfix">
                    <label class="lbl " for="">Species<span class="red-star" >*</span></label>

                    <input id="species" name="species" type="text" class="form-control " value="<?php echo $details['species'] ?>" required disabled/>


                </div>
                <div class="form-group ">
                    <label class= "lbl">Select a photo<span class="red-star" >*</span></label>
                    <input type="file" name="image" id= "image" class="my-text"  ><br />
                </div>  
                <div class="form-group clearfix">
                    <label class="lbl " for="">Common Name(s)<span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="common_names" name="common_names" rows="5" cols="50" required disabled><?php echo $details['common_names'] ?></textarea>


                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Synonyms</label>

                    <textarea class="form-control my-text" id="synonyms" name="synonyms" rows="5" cols="50" required disabled><?php echo $details['synonyms'] ?></textarea>


                </div>


                <div class="form-group clearfix">
                    <label class="lbl " for="">Roosts Types<span class="red-star" >*</span></label>
                    <textarea class="form-control my-text " id="roost" name="roost" rows="5" cols="50" required disabled><?php echo $details['roost'] ?></textarea>


                </div>
                <div class="form-group clearfix">
                    <label class="lbl" for="">Conservation Status<span class="red-star" >*</span></label>

                    <input id="conservation_status" name="conservation_status" type="text" class=" form-control" value="<?php echo $details['conservation_status'] ?>" required disabled/>




                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Countries Occurrence<span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="country_occurence" name="country_occurence" rows="5" cols="50" required disabled><?php echo $details['country_occurence'] ?></textarea>


                </div>

                <div class="form-group clearfix">
                    <label class="lbl" for="">Locations <span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="locations" name="locations" rows="5" cols="50" required disabled><?php echo $details['locations'] ?></textarea>


                </div>


                <div class="form-group clearfix">
                    <label class="lbl" for="">Diet & Feeding<span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="feeding" name="feeding" rows="5" cols="50" required disabled> <?php echo $details['feeding'] ?> </textarea>
                </div>
                <div class="form-group clearfix">
                    <label class="lbl " for="">Breeding & Habbits<span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="breeding" name="breeding" rows="5" cols="50" required disabled> <?php echo $details['breeding'] ?> </textarea>




                </div>

                <div class="form-group clearfix">
                    <label class=" lbl" for="">Major Threats<span class="red-star" >*</span>  </label>

                    <textarea class="form-control my-text " id="threats" name="threats" rows="5" cols="50" required disabled> <?php echo $details['threats'] ?> </textarea>




                </div> 
                <div class="form-group clearfix">
                    <label class=" lbl" for="">Conservation Actions</label>

                    <textarea class="form-control my-text " id="conservation_action" name="conservation_action" rows="5" cols="50" disabled> <?php echo $details['conservation_action'] ?> </textarea>

                </div>




                <div class="form-group clearfix">
                    <label class="lbl " for="">Measurements<span class="red-star" >*</span></label>

                    <textarea class="form-control my-text " id="measurements" name="measurements" rows="5" cols="50" required disabled> <?php echo $details['measurements'] ?> </textarea>




                </div>
                <div class="form-group clearfix">
                    <label class=" lbl " for="">Other Details</label>

                    <textarea class="form-control my-text " id="other_details" name="other_details" rows="5" cols="50" disabled> <?php echo $details['other_details'] ?> </textarea>



                </div>
                <div class="col-xs-8">
                    <input type="submit" class="my-button submit_btn_edit" value ="Submit" id ="myBtn" disabled />

                </div>



            </form>

            <script>
                //make disabled text fields editable

                function myFunction() {
                    document.getElementById("myBtn").disabled = false;
                    document.getElementById("bat_order").disabled = false;
                    document.getElementById("threats").disabled = false;
                    document.getElementById("synonyms").disabled = false;
                    document.getElementById("roost").disabled = false;
                    document.getElementById("conservation_status").disabled = false;
                    document.getElementById("country_occurence").disabled = false;
                    document.getElementById("locations").disabled = false;
                    document.getElementById("feeding").disabled = false;
                    document.getElementById("breeding").disabled = false;
                    document.getElementById("conservation_action").disabled = false;
                    document.getElementById("measurements").disabled = false;
                    document.getElementById("other_details").disabled = false;
                    document.getElementById("kingdom").disabled = false;
                    document.getElementById("genus").disabled = false;
                    document.getElementById("phylum").disabled = false;
                    document.getElementById("family").disabled = false;
                    document.getElementById("sbfamily").disabled = false;
                    document.getElementById("bat_class").disabled = false;
                    document.getElementById("species").disabled = false;
                    document.getElementById("common_names").disabled = false;
                    document.getElementById("population").disabled = false;

                }

            </script>
        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>
    </body>
</html>