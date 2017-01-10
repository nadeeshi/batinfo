<?php
ob_start();
include('../../assets/includedFiles/connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {
        $eusername=$_POST['eusername'];
        $eusermail=$_POST['eusermail'];
        $emobile=$_POST['eusermobile'];
        $updated=mysqli_query($bd,"UPDATE researcher_details SET
        username='$eusername', emailid='$eusermail', mobileno='$emobile' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:../insert/researchersDetails.php');
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
                <h1 class="page-head-line">Researcher Details</h1>
                <h1 class="page-subhead-line">All memeber Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Researcher</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM researcher_details WHERE id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {
                                    $username=$profile['username'];
                                    $usermail=$profile['emailid'];
                                    $usermobile=$profile['mobileno'];
                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <div class="col-xs-12">
                                                <label for="name"  id="preinput" class="col-xs-5"> *RESEARCHER NAME : </label>
                                                <input type="text" name="eusername" required class="col-xs-7" placeholder="Enter your name"
                                                       value="<?php echo $username; ?>" id="inputid" />
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="email"  id="preinput" class="col-xs-5"> *EMAIL ID : </label>
                                                <input type="email" name="eusermail" required class="col-xs-7" placeholder="Enter your Email"
                                                       value="<?php echo $usermail; ?>" id="inputid" />
                                            </div>
                                            <div class="col-xs-12">
                                                <label for="mobile" id="preinput" class="col-xs-5"> *MOBILE NUMBER : </label>
                                                <input type="text" name="eusermobile" required class="col-xs-7" placeholder="Enter your mobile number"
                                                       value="<?php echo $usermobile; ?>" id="inputid" />
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" name="update" value="Update" id="inputid1" />
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