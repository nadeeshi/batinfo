<?php
ob_start();
include("../include_files/connect.php");

if(isset($_POST['send'])!="")
{
    $researchName=mysql_real_escape_string($_POST['researchName']);
    $assessmentNames=mysql_real_escape_string($_POST['assessmentNames']);
    $kingdom=mysql_real_escape_string($_POST['kingdom']);
    $phylum=mysql_real_escape_string($_POST['phylum']);
    $class=mysql_real_escape_string($_POST['class']);
    $orderr=mysql_real_escape_string($_POST['orderr']);
    $family=mysql_real_escape_string($_POST['family']);
    $taxonName=mysql_real_escape_string($_POST['taxonName']);
    $synonyms=mysql_real_escape_string($_POST['synonyms']);
    $commonNames=mysql_real_escape_string($_POST['commonNames']);
    $taxonomicNotes=mysql_real_escape_string($_POST['taxonomicNotes']);
    $redListCategory=mysql_real_escape_string($_POST['redListCategory']);
    $criteria=mysql_real_escape_string($_POST['criteria']);
    $more1=mysql_real_escape_string($_POST['more1']);
    $description=mysql_real_escape_string($_POST['description']);
    $countryOccurrences=mysql_real_escape_string($_POST['countryOccurrences']);
    $more2=mysql_real_escape_string($_POST['more2']);
    $population=mysql_real_escape_string($_POST['population']);
    $h_E=mysql_real_escape_string($_POST['h_E']);
    $threats=mysql_real_escape_string($_POST['threats']);
    $conservationActions=mysql_real_escape_string($_POST['conservationActions']);
    $credits=mysql_real_escape_string($_POST['credits']);
    $bibliography=mysql_real_escape_string($_POST['bibliography']);
    $citation=mysql_real_escape_string($_POST['citation']);
    $disclaimer=mysql_real_escape_string($_POST['disclaimer']);
    $eResources=mysql_real_escape_string($_POST['eResources']);
    $others=mysql_real_escape_string($_POST['others']);





    $update=mysqli_query($db,"INSERT INTO research_details(researchName,assessmentNames,kingdom,phylum,class,orderr,family,taxonName,synonyms,
commonNames,taxonomicNotes,redListCategory,criteria,more1,description,countryOccurrences,more2,population,h_E,threats,conservationActions,
credits,bibliography,citation,disclaimer,eResources,others,created)VALUES
           ('$researchName','$assessmentNames','$kingdom','$phylum','$class','$orderr','$family','$taxonName','$synonyms','$commonNames',
           '$taxonomicNotes','$redListCategory','$criteria','$more1','$description','$countryOccurrences','$more2','$population','$h_E','$threats',
           '$conservationActions','$credits','$bibliography','$citation','$disclaimer','$eResources','$others',now())");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:researchDetails.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
}
ob_end_flush();
?>