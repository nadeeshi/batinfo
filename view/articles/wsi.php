<?php session_start();

 ?>

<!doctype html>
<html>
<head>
<title>Write Article | BatsInfo</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <link href="../../assets/css/navbar1n2.css" rel="stylesheet">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(150)
            .height(200);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
      
  </script> 
<!--<style type="text/css">
.intLink { cursor: pointer; }
img.intLink { border: 0; }
#toolBar1 select { font-size:10px; }
#textBox {
  width: 540px;
  height: 200px;
  border: 1px #000000 solid;
  padding: 12px;
  overflow: scroll;
}
#textBox #sourceText {
  padding: 0;
  margin: 0;
  min-width: 498px;
  min-height: 200px;
}
#editMode label { cursor: pointer; }

</style>-->
</head>
<body onload="initDoc();">
  <div class="public-background">
        <img src="../../assets/images/bat.jpg" width="100%" height="100%" style="opacity: 0.9;" >
  </div>
  <div>
    <?php include "../../assets/IncludedFiles/mainnav.php"; ?> 
  </div>
  <div class="col-xs-12 body-content">
    <div class="public-thread-content public-div-content col-xs-10 " style="z-index: 0;">
      <div class="container" style="padding-top:80px; padding-bottom:120px; padding-right: 20px";>
        <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = "project";
    
            include "../../database/dbconnect.php";
            
            if(! get_magic_quotes_gpc() ) {
               $title = addslashes ($_POST['title']);
               $content = addslashes ($_POST['content']);
               $link = addslashes ($_POST['link']);
               $name = addslashes ($_POST['name']);
               $status = addslashes ($_POST['status']);

               //$img = $_POST['img1'];
            }else {
               $title = $_POST['title'];
               $content = $_POST['content'];
               //$img1 = $_POST['img1'];
               $link = $_POST['link'];
               $name = addslashes ($_POST['name']);
               $status = addslashes ($_POST['status']);
            }
            
              $myfile = fopen("$link", "w");
              //fwrite($myfile, $title); 
              //echo "<br>";

              $content= strip_tags($content);
              
              echo '<br>';
              fwrite($myfile, $content);
              
              
              

            $_SESSION['cntnt'] = $content;
            $_SESSION['ttl'] = $title;
            $sql = "INSERT INTO articles(title,content,link,name,status) VALUES('$title','$content','$link','$name','$status')";
             
            mysqli_select_db($con,'project');
            $retval = mysqli_query( $con, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($con));
            }
            
            //echo "Entered data successfully\n";
            
            //echo file_get_contents("$title").'<br>';
            echo "<h3>"."$title"."</h3>"."<br>"; 
            echo file_get_contents("$link").'<br>';
            echo '<div class="row">';
            echo "<a href='pdf.php'>"."View as PDF"."</a>";
            echo '</div>';
            fclose($myfile);
            
            mysqli_close($con);

         }else {
            ?>


    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
            <form method = "post" action = "<?php $_PHP_SELF ?>">
                <fieldset>
                    <legend>Post your article</legend>

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" id="title" />
                        
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        
                        <textarea type="text" name="content" rows="10"></textarea>
          <p><?php //echo $status; ?></p>
          <div class="clearfix"> </div>
          <div class="register-but">
           
          <div class="clearfix"> </div>
           
          </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text"  name="link" placeholder="title.html" id="link" />
                    </div>

                    <!--<div class="form-group">
                        <label for="img1">Upload image</label>
                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <span>Select Image<label>*</label></span>
            <input type="file" name="image"  onchange="readURL(this);"><br />
            <img id="blah" src="" alt="your image"/>
            
              </div>-->
                    </div>
            <div class="form-group">
              <label >Your Name</label>
              <input type="text" name="name" id="name" />
                        
            </div>
            <div class="form-group">
              <label >Status</label>
              <select name="status" id="status">
              <option name="researcher">Researcher</option>
              <option name="publicuser">Public user</option>
              </select>
                        
            </div>
                    <!--<div class="form-group">
                        <label for="img2">Upload image</label>
                        <input type="file" name="img2" id="img2" /><br><br>
                    </div>
                    <div class="form-group">
                        <label for="link">/label>
                        <input type="text" name="link" id="link" /> <br>
                       <input name="link" value  />-->
                    
                        
 
                <input name = "add" type = "submit" id = "add" 
                              value = "Post Article">
            
                  <input name = "" type = "submit" id = ""  href="" value="cancel" onclick="alert('cancel the procedure')">

                    
                    <!--<div class="form-group">
                        <label for="link">/label>
                        <input type="text" name="link" id="link" /> <br>
                       <input name="link" value  />-->
                    
            </form>

            <?php
         }
      ?>
  </div>
</div>
</div>
</fieldset>
</form>
</div>
<div>
  <?php include "../../assets/IncludedFiles/footer.php" ; ?> 
</div>
</body>
</html>