
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
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script type ="text/javascript" src="../../assets/JS/multi_step_form.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/jquary.js"></script>

        <script src="../../assets/JS/validation_check.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
    </head>
    <body>
        <!-- include header file-->
        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>


        <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form insert-bat">
            <!-- set the insert form -->
            <form  id="form" action="../../controller/insert/insert_core.php" method ="post" enctype="multipart/form-data" class="col-sm-11 col-xs-11">

                <fieldset id="first" class="my-fieldset">
                    <div class="container-form">

                        <div class="head-form" >
                            <p>Insert New Bats</p>
                        </div>
                        <?php
                        //get already availabale bats, so user can see newly inserting bats is alraedy there
                        require_once('../../database/dbconnect.php');
                        $sql = "SELECT scientific_name FROM bat_info WHERE del_bit='0'";
                        $result = mysqli_query($con, $sql);
                        ?>

                        <p class="subtitle">[ 1/3 ] <span class="red-star" >(* required )</span></p>
                        <div class="form-group ">

                            <label class= "lbl" >Scientific Name <span class="red-star" >*</span></label>
                            <input type="text" name ="scientific_name" class="form-control my-text" id= "sname" aria-describedby="sname" required><br>

                            <?php
                            //get already availabale bats, so user can see newly inserting bats is alraedy there

                            echo"<label id= 'alredy_bats' class ='lbl'>already availabale bats</label> <br> ";
                            echo "<select id='selected'>";
                            while ($row = mysqli_fetch_array($result)) {

                                echo "<option class ='lbl' value=" . $row['scientific_name'] . "'>" . $row['scientific_name'] . "
                                  
                                </option>";
                            }
                            echo "</select>";

                            //checking done
                            mysqli_close($con);
                            ?>

                        </div>


                        <div class="form-group ">
                            <label class= "lbl">Order<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text " name="bat_order" id="order" aria-describedby="order" required>
                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Kingdom<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="kingdom" id="kingdom" aria-describedby="kingdom" required>

                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Genus<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name= "genus" id="genus" aria-describedby="genus" required>
                        </div>
                        <div class="form-group ">
                            <label class= "lbl">Phylum<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="phylum" id="phylum" aria-describedby="phylum" required>

                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Family<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="family" id="family" aria-describedby="family" required>
                        </div>
                        <div class="form-group ">
                            <label class= "lbl">Sub Family<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name= "sub_family" id="sbfamily" aria-describedby="sbfamily" required>

                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Class<span class="red-star" >*</span></label>
                            <input type="text" class="form-control my-text" name="bat_class"  id="class" aria-describedby="class" required>
                        </div>
                        <div class="form-group">
                            <label class= "lbl">Species<span class="red-star" >*</span></label>

                            <input type="text" class="form-control my-text" name= "species" id="species" aria-describedby="species" required>
                        </div>

                        <div class="form-group ">
                            <label class= "lbl">Select a photo<span class="red-star" >*</span></label>
                            <input type="file" name="image" id= "image" class="my-text" required><br />
                        </div>  

                        <div class="form-group ">
                            <input type="button" id="next_btn1"  class="my-button next-btn-1 " value="Next >" onclick="next_step1()" />
                        </div>



                    </div>


                </fieldset>
                <fieldset id="second" class="my-fieldset">
                    <p class="subtitle">[ 2/3 ]<span class="red-star" >(* required )</span></p>
                    <div class="form-group ">
                        <label class= "lbl">Common Name(s)<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="common_names" id="cnames" rows="4" cols="50" required> </textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Synonyms</label>
                        <textarea class="form-control my-text" name="synonyms" id="synonyms" rows="4" cols="50"  > </textarea>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Roosts Types<span class="red-star" >*</span></label>

                        <textarea class="form-control my-text" name="roost" id="roost" rows="4" cols="20" required> </textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Conservation Status<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text" name="conservation_status" id="conservation_status" aria-describedby="redlist" required>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Countries Occurrence<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="country_occurence" id="occurence" rows="4" cols="20"required > </textarea>

                    </div>
                    <div class="form-group">
                        <label class= "lbl">Locations</label>
                        <textarea class="form-control my-text" name="locations" id="locations" rows="4" cols="50"  > </textarea>
                    </div>


                    <div class="form-group">
                        <input type="button" id="pre_btn1"  class="my-button  prev-btn-2 " value="< Previous" onclick="prev_step1()"/>
                        <input type="submit" name="next" class="my-button next-btn-2" id="next_btn2" value="Next >" onclick="next_step2()" />
                    </div>


                </fieldset>
                <fieldset id="third" class="my-fieldset">
                    <p class="subtitle">[ 3/3 ]<span class="red-star" >(* required )</span></p>
                    <div class="form-group">
                        <label class= "lbl">Diet & Feeding <span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="feeding" id="food" rows="4" cols="50" required></textarea>

                    </div>

                    <div class="form-group">
                        <label class= "lbl">Breeding & Habbits<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="breeding" id="breeding" rows="4" cols="20" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Major Threats<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name= "threats" id="threats" rows="4" cols="20" required></textarea>

                    </div>
                    <div class="form-group">
                        <label class= "lbl">Conservation Actions </label>
                        <textarea class="form-control my-text" name="conservation_action" id="conseravtion" rows="4" cols="20" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class= "lbl">Population (million)<span class="red-star" >*</span> </label> 
                        <input type="text" class="form-control my-text" name= "population" id="population"  required>

                    </div>
                    <div class="form-group">
                        <label class= "lbl">Measurements<span class="red-star" >*</span></label>
                        <textarea class="form-control my-text" name="measurements" id="measurements" rows="4" cols="20" required></textarea>
                    </div>


                    <div class="form-group">
                        <label class= "lbl">Other Details</label>
                        <textarea class="form-control my-text" name="other_details" id="otherDetails" rows="4" cols="20" ></textarea>
                    </div>


                    <div class=" col-xs-8">
                        <input type="button" id="pre_btn2" class="prev-btn-3 my-button" value="< Previous" onclick="prev_step2()"/>
                        <input type="submit" id="sub_btn" class="submit_btn_insert my-button" name="submit" value="Submit" onclick="validation(event)"/>

                    </div>

                </fieldset>

            </form><br><br>
        </div>

        <!-- start footer -->
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>


    </body>


    <script></script>
</html>