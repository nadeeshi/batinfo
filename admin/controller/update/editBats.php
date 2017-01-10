<?php
ob_start();
include('../../assets/includedFiles/connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {


        $scientificName=$_POST['scientificName'];
        $kingdom=$_POST['kingdom'];
        $phylum=$_POST['phylum'];
        $class=$_POST['class'];
        $orderr=$_POST['orderr'];
        $genus=$_POST['genus'];
        $family=$_POST['family'];
        $subFamily=$_POST['subFamily'];
        $speciesAuthority=$_POST['speciesAuthority'];
        $commonNames=$_POST['commonNames'];
        $synonyms=$_POST['synonyms'];
        $redListCategory=$_POST['redListCategory'];
        $distribution=$_POST['distribution'];
        $oioCountries=$_POST['oioCountries'];
        $population=$_POST['population'];
        $roosts=$_POST['roosts'];
        $commonFood=$_POST['commonFood'];
        $bibliography=$_POST['bibliography'];
        $conservation=$_POST['conservation'];


        $updated=mysqli_query($bd,"UPDATE bats_details SET
        scientificName='$scientificName', kingdom='$kingdom', phylum='$phylum'  ,class='$class' ,orderr='$orderr' ,genus='$genus',
         family='$family',subFamily='$subFamily',speciesAuthority='$speciesAuthority',commonNames='$commonNames', synonyms='$synonyms',
           redListCategory='$redListCategory',distribution='$distribution',oioCountries='$oioCountries',population='$population',
            roosts='$roosts',commonFood='$commonFood',bibliography='$bibliography',conservation='$conservation' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:newBat.php');
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
                                $getselect=mysqli_query($bd,"SELECT * FROM bats_details WHERE id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {

                                    $scientificName=$profile['scientificName'];
                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['class'];
                                    $orderr=$profile['orderr'];
                                    $genus=$profile['genus'];
                                    $family=$profile['family'];
                                    $subFamily=$profile['subFamily'];
                                    $speciesAuthority=$profile['speciesAuthority'];
                                    $commonNames=$profile['commonNames'];
                                    $synonyms=$profile['synonyms'];
                                    $redListCategory=$profile['redListCategory'];
                                    $distribution=$profile['distribution'];
                                    $oioCountries=$profile['oioCountries'];
                                    $population=$profile['population'];
                                    $roosts=$profile['roosts'];
                                    $commonFood=$profile['commonFood'];
                                    $bibliography=$profile['bibliography'];
                                    $conservation=$profile['conservation'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <div class="col-xs-12">
                                                <label for="name"  id="preinput" class="col-xs-5"> SCIENTIFIC NAME : </label>
                                                <input type="text"   name="scientificName" required placeholder="Enter  name"
                                                       value="<?php echo $scientificName; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="kingdom"  id="preinput" class="col-xs-5"> KINGDOM : </label>
                                                <input type="text"   name="kingdom" required placeholder="Enter  kingdom"
                                                       value="<?php echo $kingdom; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label for="phylum" id="preinput" class="col-xs-5"> PHYLUM : </label>
                                                <input type="text"   name="phylum"  placeholder="Enter  phylum"
                                                       value="<?php echo $phylum; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="class"  id="preinput" class="col-xs-5"> CLASS : </label>
                                                <input type="text"   name="class"  placeholder="Enter class"
                                                       value="<?php echo $class; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="orderr"  id="preinput" class="col-xs-5"> ORDER : </label>
                                                <input type="text"   name="orderr"  placeholder="Enter order"
                                                       value="<?php echo $orderr; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="genus"  id="preinput" class="col-xs-5"> GENUS : </label>
                                                <input type="text"   name="genus"  placeholder="Enter genus"
                                                       value="<?php echo $genus; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="family"  id="preinput" class="col-xs-5"> FAMILY : </label>
                                                <input type="text"   name="family" required placeholder="Enter family"
                                                       value="<?php echo $family; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="subFamily"  id="preinput" class="col-xs-5"> SUB FAMILY : </label>
                                                <input type="text"   name="subFamily"  placeholder="Enter subFamily"
                                                       value="<?php echo $subFamily; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="speciesAuthority"  id="preinput" class="col-xs-5"> SPECIES AUTHORITY : </label>
                                                <input type="text"   name="speciesAuthority"  placeholder="Enter speciesAuthority"
                                                       value="<?php echo $speciesAuthority; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="commonNames"  id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                                <textarea name="commonNames" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $commonNames?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="synonyms"  id="preinput" class="col-xs-5"> SYNONYMS : </label>
                                                <!--<textarea    style="height: 200px" name="synonyms"  placeholder="Enter synonyms"
                                                       value="" id="inputid" class="col-xs-7"></textarea>-->

                                                <textarea name="synonyms" id="preinput" style="height: 200px" class="col-xs-7"><?php echo $synonyms?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="redListCategory"  id="preinput" class="col-xs-5"> RED LIST CATEGORY : </label>
                                                <input type="text"   name="redListCategory"  placeholder="Enter redListCategory"
                                                       value="<?php echo $redListCategory; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="distribution"  id="preinput" class="col-xs-5"> DISTRIBUTION : </label>
                                                <textarea name="distribution" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $distribution?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="oioCountries"  id="preinput" class="col-xs-5"> OIO COUNTRIES : </label>
                                                <textarea name="oioCountries" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $oioCountries?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="population"  id="preinput" class="col-xs-5"> POPULATION : </label>
                                                <textarea name="population" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $population?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="roosts"  id="preinput" class="col-xs-5"> ROOSTS : </label>
                                                <input type="text"   name="roosts"  placeholder="Enter roosts"
                                                       value="<?php echo $roosts; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="commonFood"  id="preinput" class="col-xs-5"> COMMON FOOD : </label>
                                                <textarea name="commonFood" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $commonFood?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="bibliography"  id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                                <textarea name="bibliography" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $bibliography?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="conservation"  id="preinput" class="col-xs-5"> CONSERVATION : </label>
                                                <textarea name="conservation" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $conservation?></textarea>
                                            </div>





                                            <div class="col-xs-12">
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






</body>
</html>