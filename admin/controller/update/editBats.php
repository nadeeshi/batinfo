<?php
require_once('../../assets/includedFiles/auth.php');
?>


<?php
ob_start();
include('../../assets/includedFiles/connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {


        $scientific_name=$_POST['scientific_name'];
        $bat_order=$_POST['bat_order'];
        $kingdom=$_POST['kingdom'];
        $genus=$_POST['genus'];
        $phylum=$_POST['phylum'];
        $family=$_POST['family'];
        $sub_family=$_POST['sub_family'];
        $bat_class=$_POST['bat_class'];
        $species=$_POST['species'];
        $common_names=$_POST['common_names'];
        $synonyms=$_POST['synonyms'];
        $roost=$_POST['roost'];
        $conservation_status=$_POST['conservation_status'];
        $country_occurence=$_POST['country_occurence'];
        $feeding=$_POST['feeding'];
        $breeding=$_POST['breeding'];
        $threats=$_POST['threats'];
        $conservation_action=$_POST['conservation_action'];
        $population=$_POST['population'];
        $measurements=$_POST['measurements'];
        $other_details=$_POST['other_details'];



        $updated=mysqli_query($bd,"UPDATE bat_info SET
        scientific_name='$scientific_name', bat_order='$bat_order', kingdom='$kingdom' ,genus='$genus' ,phylum='$phylum' ,family='$family',
         sub_family='$sub_family',bat_class='$bat_class',species='$species',common_names='$common_names', synonyms='$synonyms',
           roost='$roost',conservation_status='$conservation_status',country_occurence='$country_occurence',feeding='$feeding',
            breeding='$breeding',threats='$threats',conservation_action='$conservation_action',population='$population',measurements='$measurements',other_details='$other_details' WHERE bat_id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:../../view/batDetails/listOfBats.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />


</head>

<body>
<?php include("../../assets/includedFiles/template.php")?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Update Bat details</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM bat_info WHERE bat_id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {

                                    $scientific_name=$profile['scientific_name'];
                                    $bat_order=$profile['bat_order'];
                                    $kingdom=$profile['kingdom'];
                                    $genus=$profile['genus'];
                                    $phylum=$profile['phylum'];
                                    $family=$profile['family'];
                                    $sub_family=$profile['sub_family'];
                                    $bat_class=$profile['bat_class'];
                                    $species=$profile['species'];
                                    $common_names=$profile['common_names'];
                                    $synonyms=$profile['synonyms'];
                                    $roost=$profile['roost'];
                                    $conservation_status=$profile['conservation_status'];
                                    $country_occurence=$profile['country_occurence'];
                                    $feeding=$profile['feeding'];
                                    $breeding=$profile['breeding'];
                                    $threats=$profile['threats'];
                                    $conservation_action=$profile['conservation_action'];
                                    $population=$profile['population'];
                                    $measurements=$profile['measurements'];
                                    $other_details=$profile['other_details'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                        <div class="form-group clearfix">
                                            <label>Scientific Name</label>

                                            <!--print curretnt bat`s name -->



                                            <input type="text"  id="scientific_name" name="scientific_name" class="form-control " value="<?php echo $scientific_name ?>" required   />




                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="lbl " >Order<span class="red-star" >*</span></label>

                                            <input type="text"  id="bat_order" name="bat_order" class="form-control " value="<?php echo $bat_order ?>" required   />


                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="lbl " >Kingdom<span class="red-star" >*</span></label>

                                            <input type="text"  id="kingdom" name="kingdom" class="form-control " value="<?php echo $kingdom ?>" required  />


                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="lbl " for="emp_id">Genus</label>

                                            <input class="required form-control " id="genus" name="genus" type="text" value="<?php echo $genus ?>" required  />

                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="lbl" for="name">Phylum<span class="red-star" >*</span></label>

                                            <input id="phylum" name="phylum" type="text" class="form-control " value="<?php echo $phylum ?>"  />

                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="lbl " for="email">Family<span class="red-star" >*</span> </label>

                                            <input id="family" name="family" type="text" class="form-control " value="<?php echo $family ?>" required  />

                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="lbl " for="emp_id">Sub Family<span class="red-star" >*</span></label>

                                            <input class=" form-control " id="sbfamily" name="sub_family" type="text" value="<?php echo $sub_family ?>" required  />

                                        </div>

                                        <div c lass="form-group clearfix">
                                            <label class="lbl" for="name">Class<span class="red-star" >*</span></label>

                                            <input id="bat_class" name="bat_class" type="text" class="form-control " value="<?php echo $bat_class ?>" required  />

                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="lbl " for="email">Species<span class="red-star" >*</span></label>

                                            <input id="species" name="species" type="text" class="form-control " value="<?php echo $species ?>" required  />


                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="lbl " for="emp_id">Common Name(s)<span class="red-star" >*</span></label>

                                            <textarea class="form-control my-text " id="common_names" name="common_names" rows="5" cols="50" required  ><?php echo $common_names ?></textarea>


                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="lbl" for="name">Synonyms</label>

                                            <textarea class="form-control my-text" id="synonyms" name="synonyms" rows="5" cols="50" required  ><?php echo $synonyms ?></textarea>


                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="lbl " for="email">Roosts Types<span class="red-star" >*</span></label>
                                            <textarea class="form-control my-text " id="roost" name="roost" rows="5" cols="50" required  ><?php echo $roost ?></textarea>


                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="lbl" for="emp_id">Conservation Status<span class="red-star" >*</span></label>

                                            <input id="conservation_status" name="conservation_status" type="text" class=" form-control" value="<?php echo $conservation_status ?>" required  />




                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="lbl" for="name">Countries Occurrence<span class="red-star" >*</span></label>

                                            <textarea class="form-control my-text " id="country_occurence" name="country_occurence" rows="5" cols="50" required  ><?php echo $country_occurence ?></textarea>


                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="lbl" for="email">Diet & Feeding<span class="red-star" >*</span></label>

                                            <textarea class="form-control my-text " id="feeding" name="feeding" rows="5" cols="50" required  > <?php echo $feeding ?> </textarea>





                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="lbl " for="emp_id">Breeding & Habbits<span class="red-star" >*</span></label>

                                            <textarea class="form-control my-text " id="breeding" name="breeding" rows="5" cols="50" required > <?php echo $breeding ?> </textarea>




                                        </div>

                                        <div class="form-group clearfix">
                                            <label class=" lbl" for="name">Major Threats<span class="red-star" >*</span>  </label>

                                            <textarea class="form-control my-text " id="threats" name="threats" rows="5" cols="50" required  > <?php echo $threats ?> </textarea>




                                        </div>
                                        <div class="form-group clearfix">
                                            <label class=" lbl" for="name">Conservation Actions</label>

                                            <textarea class="form-control my-text " id="conservation_action" name="conservation_action" rows="5" cols="50"  > <?php echo $conservation_action ?> </textarea>

                                        </div>




                                        <div class="form-group clearfix">
                                            <label class="lbl " for="email">Measurements<span class="red-star" >*</span></label>

                                            <textarea class="form-control my-text " id="measurements" name="measurements" rows="5" cols="50" required  > <?php echo $measurements ?> </textarea>




                                        </div>
                                        <div class="form-group clearfix">
                                            <label class=" lbl " for="email">Other Details</label>

                                            <textarea class="form-control my-text " id="other_details" name="other_details" rows="5" cols="50"  > <?php echo $other_details ?> </textarea>



                                        </div>
                                        <div class="col-xs-8">
                                            <br>
                                            <input type="submit" style="width: 300px" name="update" value="Update" id="inputid1" />


                                        </div>



















                                        </form>
                                    </div>
                                <?php } } ?>
                        </div>
                    </div>









                </div>
            </div>
        </div>



    </div>
</div>




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>





