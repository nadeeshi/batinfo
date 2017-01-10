<?php 
$msg ='';
require_once ('../../assets/includedFiles/connect.php');
if (!empty($_POST)) {
  $topic = $_POST['topic'];
  $message =$_POST['message'];
  $date= date('Y-m-d');

  $query= "INSERT INTO topics (topic_subject, topic_content, topic_date) VALUES ('$topic' ,'$message', '$date' )";
  $result= mysqli_query($bd, $query);

  if ($result){
    $msg ='<a href=../../view/forum/forumTopics.php>View your topics</a>';
  }
  else{
    $msg= "Error" .'<br>'. mysqli_error($bd);
  }

}
?>

<!DOCTYPE html>
<html>
  <head>
  	<title>addThread</title>
    	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">

    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    <!-- <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->
  </head>
  <body>
    <div>
      <?php include "../../assets/includedFiles/template.php" ?> 
    </div>

    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <div class="content col-xs-12">
              <h4 class="header-content">Your New Discussion Topic</h4>
              <form class="form-horizontal" method="post" action="addThread.php">
                <div class="form-group">
                  <label class="control-label col-xs-2">Subject:</label>
                  <div class="col-xs-8">
                    <input type="text" class="form-control form-row" id="subject" name="topic" placeholder="Enter Subject" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-2">Message:</label>
                  <div class="col-xs-8">
                    <textarea class="massage form-row form-control" rows="6" cols="8" name="message"></textarea>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-xs-offset-2 col-xs-8 btn-class">
                    <button type="submit" class="btn btn-default button-custom">Post to forum</button>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-2"></label>
                  <div class="col-xs-8">
                    <?php echo $msg; ?>
                  </div>
                </div>
              </form>
            </div>
          </div>  
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
      

     


<!-- strat footer -->
  
  
    <div id="footer-sec"><b>Group 23-UCSC Group Project</b>
    </div> 
  

<!-- end of footer -->

  </body>
</html>