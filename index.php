
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Home | BatsInfo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	  <!-- Bootstrap -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--JS-->
        <link href="assets/JS/bootstrap.min.js" rel="stylesheet" media="screen">
    	  <!--Google Fonts-->
    	  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="assets/CSS/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->
        <!--<link rel="stylesheet" type="text/css" href="css/footer3.css">-->
        <script src="assets/JS/jquery.js"></script>
        <script src="assets/JS/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <link href="assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="assets/JS/bootstrap.min.js"></script>
       <script src="assets/JS/bootstrap.min.js"></script>
       <link href="assets/CSS/navbar1n2.css" rel="stylesheet">

    <script type="text/javascript" src="assets/JS/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/JS/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->

    
</head>

<body>

    <a name="home"></a>
    <div class="container-fluid" >
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #4c4743;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
      </div>

        <div class="collapse navbar-collapse" id="myNavbar">
        <a class="navbar-brand" href="#"><span style="font-family: 'Chewy', cursive;
              font-size: 45px; color:#ffffff;" >Bats</span><span style="font-size: 40px; color:#ffffff;">Info</span></a>
                <ul class="nav navbar-nav" style="font-size: 16px; padding-top: 1px; ">

                    <li><a href="">Home</a></li>
                    <li><a href="view/news/u_newst.php">News</a></li>
                    <li><a href="view/articles/article2.php">Articles</a></li>
                    <li><a href="view/forum/publicTopics.php">Forum</a></li>
                    <li><a href="view/forum/publicTopics.php">Gallery</a></li>
                    <li><a href="view/aboutus/aboutus.php">About Us</a></li>
                        
                </ul>
            <form class="navbar-form  navbar-right" action="view/rltsearch/u_testing.php" method="post">
              <div class="form-group" style="padding-top:1px;">
                  <input type="text" class="form-control input-area" name='address' placeholder="Enter name here">
              <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right" style="font-size: 16px; padding-top: 1px; padding-bottom: 8px;">
           
                    <li><a href="controller/login/page1_form.php" id="myBtn" style="font-size: 16px;"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="controller/login/login.php"  style="font-size: 16px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              
            </ul>
            </div>
          </div>
    </nav>

  
    <div class="container" style="padding-top:100px;">
        <?php include ("assets/IncludedFiles/headerImage.php") ?>
    </div>

        <div class="container-fluid" style="padding-top:30px; padding-bottom:200px;">
      
        <h2><a name="articles" style="text-decoration:none;" href="../articles/article.php">Recent Articles</a></h2>
        
        <?php 
include_once 'database/dbconnect.php';
$sql = "SELECT title, content, pubdate FROM articles ORDER BY pubdate DESC LIMIT 3";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     //echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
  echo "<div class='row'>";
     while($row = $result->fetch_assoc()) {
        
        echo "<div class='col-xs-4'>";
        echo "<h3>".$row['title']."</h3>";
        //echo "<p>".$row['content']."</p>";
        // strip tags to avoid breaking any html
        $string = strip_tags($row['content']);

        if (strlen($row['content']) > 500) {

        // truncate string
         $stringCut = substr($row['content'], 0, 5000);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
        }
        echo $string;
        echo "</div>";
         //echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
     }
     //echo "</table>";
} else {
     echo "0 results";
}

?>
        

    
    <div class="push"></div>
    <!--get footer -->
    <div id="footer" class="container=fluid" >
        <a name="contact"> <?php include ("assets/IncludedFiles/footer.php") ?> </a>
    </div>

        
  
</body>
</html>