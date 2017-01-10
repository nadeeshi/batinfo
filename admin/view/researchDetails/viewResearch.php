<!DOCTYPE html>
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
                <h1 class="page-head-line" style="color: #500a6f">Research Details</h1>
                <h1 class="page-subhead-line">All research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #00CA79">View  Details of Research</h4>
                        <div style="margin-top: 20px;">


                            <?php
                            if(isset($_GET['id']))
                            {
                                include('../../assets/includedFiles/connect.php');
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM research_details WHERE id='$id'");
                                while($profile=mysqli_fetch_array($getselect))

                                {
                                    $id=$profile['id'];
                                    $researchName=$profile['researchName'];
                                    $assessmentNames=$profile['assessmentNames'];
                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['class'];
                                    $orderr=$profile['orderr'];
                                    $family=$profile['family'];
                                    $taxonName=$profile['taxonName'];
                                    $synonyms=$profile['synonyms'];
                                    $commonNames=$profile['commonNames'];
                                    $taxonomicNotes=$profile['taxonomicNotes'];
                                    $redListCategory=$profile['redListCategory'];
                                    $criteria=$profile['criteria'];
                                    $more1=$profile['more1'];
                                    $description=$profile['description'];
                                    $countryOccurrences=$profile['countryOccurrences'];
                                    $more2=$profile['more2'];
                                    $population=$profile['population'];
                                    $h_E=$profile['h_E'];
                                    $threats=$profile['threats'];
                                    $conservationActions=$profile['conservationActions'];
                                    $credits=$profile['credits'];
                                    $bibliography=$profile['bibliography'];
                                    $citation=$profile['citation'];
                                    $disclaimer=$profile['disclaimer'];
                                    $eResources=$profile['eResources'];
                                    $others=$profile['others'];

                                    $created=$profile['created'];

                                    ?>

                                    <div class="display">
                                        <p> RESEARCH NAME : <span style="color: #cc006a"><?php echo  $researchName; ?></span>

                                        </p>
                                        <br />
                                        <p> ASSESSMENT NAMES : <span style="color: #cc006a"><?php echo  $assessmentNames; ?></span>

                                        </p>
                                        <br />
                                        <p> KINGDOM : <span style="color: #cc006a"><?php echo  $kingdom; ?></span>
                                        </p>
                                        <br />
                                        <p> PHYLUM : <span style="color: #cc006a"><?php echo   $phylum; ?></span>
                                        </p>
                                        <br />
                                        <p> CLASS : <span style="color: #cc006a"><?php echo  $class; ?></span>
                                        </p>
                                        <br />
                                        <p> ORDER : <span style="color: #cc006a"><?php echo  $orderr; ?></span>
                                        </p>
                                        <br />
                                        <p> FAMILY : <span style="color: #cc006a"><?php echo  $family; ?></span>
                                        </p>
                                        <br />
                                        <p> TAXON NAME : <span style="color: #cc006a"><?php echo  $taxonName; ?></span>
                                        </p>
                                        <br />
                                        <p> SYNONYMS : <span style="color: #cc006a"><?php echo  $synonyms; ?></span>
                                        </p>
                                        <br />
                                        <p> COMMON NAMES : <span style="color: #cc006a"><?php echo  $commonNames; ?></span>
                                        </p>
                                        <br />
                                        <p> TAXONOMIC NOTES : <span style="color: #cc006a"><?php echo  $taxonomicNotes; ?></span>
                                        </p>
                                        <br />
                                        <p> RED LIST CATEGORY : <span style="color: #cc006a"><?php echo  $redListCategory; ?></span>
                                        </p>
                                        <br />
                                        <p> CRITERIA : <span style="color: #cc006a"><?php echo  $criteria; ?></span>
                                        </p>
                                        <br />
                                        <p> MORE : <span style="color: #cc006a"><?php echo  $more1; ?></span>
                                        </p>
                                        <br />
                                        <p> DESCRIPTION : <span style="color: #cc006a"><?php echo  $description; ?></span>
                                        </p>
                                        <br />
                                        <p> COUNTRY OCCURRENCES : <span style="color: #cc006a"><?php echo  $countryOccurrences; ?></span>
                                        </p>
                                        <br />

                                        <p> MORE : <span style="color: #cc006a"><?php echo  $more2; ?></span>
                                        </p>
                                        <br />
                                        <p> POPULATION : <span style="color: #cc006a"><?php echo  $population; ?></span>
                                        </p>
                                        <br />
                                        <p> H_E : <span style="color: #cc006a"><?php echo  $h_E; ?></span>
                                        </p>
                                        <br />
                                        <p> THREATS : <span style="color: #cc006a"><?php echo  $threats; ?></span>
                                        </p>
                                        <br />
                                        <p> CONSERVATION ACTION : <span style="color: #cc006a"><?php echo  $conservationActions; ?></span>
                                        </p>
                                        <br />
                                        <p> CREDITS : <span style="color: #cc006a"><?php echo  $credits; ?></span>
                                        </p>
                                        <br />
                                        <p> BIBLIOGRAPHY : <span style="color: #cc006a"><?php echo  $bibliography; ?></span>
                                        </p>
                                        <br />
                                        <p> CITATION : <span style="color: #cc006a"><?php echo  $citation; ?></span>
                                        </p>
                                        <br />
                                        <p> DISCLAIMER : <span style="color: #cc006a"><?php echo  $disclaimer; ?></span>
                                        </p>
                                        <br />
                                        <p> EXTERNAL RESOURCES : <span style="color: #cc006a"><?php echo  $eResources; ?></span>
                                        </p>
                                        <br />
                                        <p> OTHER INFO : <span style="color: #cc006a"><?php echo  $others; ?></span>
                                        </p>
                                        <br />




                                        <p> CREATED ON : <span><?php echo $created; ?></span>
                                        </p>
                                        <br />
                                    </div>
                                <?php } }?>



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
