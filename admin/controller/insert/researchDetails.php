<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include("../include_files/template.php")?>



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
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 align="center">Add New Research details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Research details------------------------------------------------->
                            <div class="display">

                                <form action="insertResearch.php" method="post" name="insertform">
                                    <div class="col-xs-12">
                                        <label for="name" id="preinput" class="col-xs-5"> * RESEARCH NAME : </label>
                                        <input type="text" name="researchName" required placeholder="Enter your name" id="inputid"class="col-xs-7"/>
                                    </div>


                                    <div class="col-xs-12">

                                        <label  for="assNames" id="preinput" class="col-xs-5"> * ASSESSMENT NAMES: </label>
                                        <input type="text" name="assessmentNames" required placeholder="Enter your Email" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <br>
                                    <p align="center">TAXONOMY</p>
                                    <div class="col-xs-12">
                                        <label for="kingdom" id="preinput" class="col-xs-5"> * KINGDOM : </label>
                                        <input type="text" name="kingdom" required placeholder="Enter kingdom" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="phylum" id="preinput" class="col-xs-5"> PHYLUM : </label>
                                        <input type="text" name="phylum"  placeholder="Enter phylum" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="class" id="preinput" class="col-xs-5"> * CLASS : </label>
                                        <input type="text" name="class" required placeholder="Enter class" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="orderr" id="preinput" class="col-xs-5"> * ORDER : </label>
                                        <input type="text" name="orderr" required placeholder="Enter order" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="family" id="preinput" class="col-xs-5"> * FAMILY : </label>
                                        <input type="text" name="family" required placeholder="Enter family" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="taxonName" id="preinput" class="col-xs-5"> TAXON NAME : </label>
                                        <input type="text"  name="taxonName"  placeholder="Enter taxonName" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="synonyms" id="preinput" class="col-xs-5"> * SYNONYMS : </label>
                                            <textarea type="text" style="height: 100px" name="synonyms" required placeholder="Enter synonyms" id="inputid" class="col-xs-7"></textarea>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="commonNames" id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                            <textarea type="text" style="height: 100px" name="commonNames"  placeholder="Enter commonNames" id="inputid" class="col-xs-7"></textarea>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="taxonomicNotes" id="preinput" class="col-xs-5"> TAXONOMIC NOTES : </label>
                                            <textarea type="text" style="height: 300px" name="taxonomicNotes"  placeholder="Enter taxonomicNotes" id="inputid" class="col-xs-7"></textarea>
                                    </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <br>
                                    <p align="center">ASSESSMENT INFORMATION</p>
                                        <div class="col-xs-12">
                                        <label for="redListCategory" id="preinput" class="col-xs-5"> * RED LIST CATEGORY : </label>
                                        <input type="text" name="redListCategory" required placeholder="Enter redListCategory" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="criteria" id="preinput" class="col-xs-5"> * CRITERIA : </label>
                                        <input type="text" name="criteria" required placeholder="Enter criteria" id="inputid" class="col-xs-7"/>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="more1" id="preinput" class="col-xs-5"> MORE  : </label>
                                            <textarea type="text" style="height: 300px" name="more1"  placeholder="Enter more details" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    </div>

                                    <div class="col-xs-12">
                                        <br>
                                    <p align="center">GEOGRAPHIC RANGE</p>
                                        <div class="col-xs-12">
                                        <label for="description" id="preinput" class="col-xs-5"> RANGE DESCRIPTION : </label>
                                            <textarea type="text" style="height: 300px" name="description"  placeholder="Enter description" id="inputid" class="col-xs-7"></textarea>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="countryOccurrences" id="preinput" class="col-xs-5"> COUNTRY OCCURRENCES : </label>
                                            <textarea type="text" style="height: 300px" name="countryOccurrences"  placeholder="Enter countryOccurrences" id="inputid" class="col-xs-7"></textarea>
                                    </div>
                                        <div class="col-xs-12">
                                        <label for="more2" id="preinput" class="col-xs-5"> MORE  : </label>
                                            <textarea type="text" style="height: 300px" name="more2"  placeholder="Enter more details" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    </div>

                                    <div class="col-xs-12">
                                        <br>
                                    <p align="center">OTHER INFORMATION</p>

                                    <div class="col-xs-12">

                                        <label  for="population" id="preinput" class="col-xs-5"> * POPULATION: </label>
                                        <textarea type="text" style="height: 250px" name="population" required placeholder="Enter population" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="h_E" id="preinput" class="col-xs-5"> HABITAT & ECOLOGY : </label>
                                        <textarea type="text" style="height: 250px" name="h_E"  placeholder="Enter habitat & ecology" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="threats" id="preinput" class="col-xs-5"> THREATS : </label>
                                        <textarea type="text" style="height: 250px" name="threats"  placeholder="Enter threats" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="conservationActions" id="preinput" class="col-xs-5"> * CONSERVATION ACTIONS : </label>
                                        <textarea type="text" style="height: 300px" name="conservationActions" required placeholder="Enter conservationActions" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="credits" id="preinput" class="col-xs-5"> CREDITS : </label>
                                        <textarea type="text" style="height: 250px" name="credits"  placeholder="Enter credits" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="bibliography" id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                        <textarea type="text" style="height: 300px" name="bibliography"  placeholder="Enter bibliography" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="citation" id="preinput" class="col-xs-5"> CITATION : </label>
                                        <textarea type="text" style="height: 250px" name="citation"  placeholder="Enter citation" id="inputid"  class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="disclaimer" id="preinput" class="col-xs-5"> DISCLAIMER : </label>
                                        <textarea type="text" style="height: 250px" name="disclaimer"  placeholder="Enter disclaimer" id="inputid"  class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="eResources" id="preinput" class="col-xs-5"> EXTERNAL RESOURCES : </label>
                                        <textarea type="text" style="height: 250px" name="eResources"  placeholder="Enter External Resources" id="inputid" class="col-xs-7" ></textarea>
                                    </div>

                                    <div class="col-xs-12">

                                        <label  for="others" id="preinput" class="col-xs-5"> OTHER INFORMATION : </label>
                                        <textarea type="text" style="height: 300px" name="others"  placeholder="Enter other information" id="inputid" class="col-xs-7" ></textarea>
                                    </div>
                                        </div>









                                    <div class="col-xs-12">
                                        <br>
                                        <input type="submit" style="width: 100px" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>

                            </div>
                            <!--close details-->






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
