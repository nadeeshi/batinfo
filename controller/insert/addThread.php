<!DOCTYPE html>
<html>
  <head>
    <title>addThread</title>
      <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">
      <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
      <script src="../../assets/js/jquery.js"></script>
      <script src="../../assets/js/bootstrap.js"></script>
    <!-- <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->
  </head>
  <body>
    <div>
      <?php include "../../assets/includedFiles/navbarTemplate.php";
       ?> 
    </div>


<?php

$msg ='';
require_once ('../../database/dbconnect.php');
if (!empty($_POST)) {
  $topic = $_POST['topic'];
  $message =$_POST['message'];
  $date= date('Y-m-d');
  $topicby= $_SESSION['usr_id'];
  //echo $topic;
   //echo $_SESSION['usr_id'];
  // session_destroy();
  $query= "INSERT INTO topics (topic_subject, topic_content, topic_date, topic_by) VALUES ('$topic' ,'$message', '$date', '$topicby' )";
  $result= mysqli_query($con, $query);
  error_reporting(E_ALL^E_WARNING);
  if ($result){
    header("Location:../../view/forum/forumTopics.php");

  }
  else{
    
    $msg= "Error in adding thread";
  }

  

}
?>


      <div class="col-sm-8 col-sm-push-3 col-xs-12 insert-form">
      	<div class="content col-xs-12">
          <h4 class="header-content">Your New Discussion Topic</h4>
            <form class="form-horizontal form-group-custom" method="post" action="addThread.php">
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
              <div class="form-group form-group-custom">
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
    


<!-- strat footer -->
  
  
    <div class="col-sm-10 col-sm-push-2 col-xs-12">
      <?php include "../../assets/includedFiles/footer.php" ?>
    </div>  
  

<!-- end of footer -->

  </body>
</html>