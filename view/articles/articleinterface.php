<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <link href="assets/css/navbar1n2.css" rel="stylesheet">
</head>
<body>
<?php include "../mainhome/mainnav.php" ;
include "../mainhome/footer3.php" ;
?>
<div class="container" style="padding-top:120px; padding-bottom:120px;">

            <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = "project";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $title = addslashes ($_POST['title']);
               $content = addslashes ($_POST['content']);
               $link = addslashes ($_POST['link']);
            }else {
               $title = $_POST['title'];
               $content = $_POST['content'];
               //$img1 = $_POST['img1'];
               $link = $_POST['link'];
            }
            
              $myfile = fopen("$link", "w");
              //fwrite($myfile, $title); 
              //echo "<br>";
              fwrite($myfile, $content);
              
              

            $_SESSION['cntnt'] = $content;
            $_SESSION['ttl'] = $title;
            $sql = "INSERT INTO articles (title,content,link) VALUES('$title','$content','$link')";
               
            mysqli_select_db($conn,'project');
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            
            //echo "Entered data successfully\n";
            
            //echo file_get_contents("$title").'<br>';
            echo "<h3>"."$title"."</h3>"."<br>"; 
            echo file_get_contents("$link").'<br>';
            echo "<a href='pdf.php'>"."create pdf"."</a>";
            fclose($myfile);
            
            mysqli_close($conn);


    

         }else {
            ?>



    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 well">
            <form method = "post" action = "<?php $_PHP_SELF ?>">
                <fieldset>
                    <legend>Post your article</legend>

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" id="title" />
                        
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea rows="10" cols="45" name="content" id="content"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="content">Link</label>
                        <textarea rows="2" cols="45" name="link" placeholder="title.html" id="link"></textarea>
                        
                    </div>

                    <div class="form-group">
                        <label for="img1">Upload image</label>
                        <input type="file" name="img1" placeholder="NIC" id="img1"  />
                       
                    </div>

                    <div class="form-group">
                        <label for="img2">Upload image</label>
                        <input type="file" name="img2" id="img2" /><br><br>
                    </div>
                    <!--<div class="form-group">
                        <label for="link">/label>
                        <input type="text" name="link" id="link" /> <br>
                       <input name="link" value  />-->
                    
                        
 
                <input name = "add" type = "submit" id = "add" 
                              value = "Post Article">
            </form>


            
               
                  
            
            <?php
         }
      ?>
</body>
</html>