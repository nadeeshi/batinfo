
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Home | BatsInfo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	  <!-- Bootstrap -->
    	  <link href="assets/CSS/bootstrap.css" rel="stylesheet" media="screen">
        <!--JS-->
        <link href="assets/JS/bootstrap.min.js" rel="stylesheet" media="screen">
    	  <!--Google Fonts-->
    	  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Fontawesome core CSS -->
        <link href="assets/CSS/font-awesome.min.css" rel="stylesheet" >
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/footer3.css">
        <script src="assets/js/jquary.js"></script>
        <script src="assets/js/bootstrapjs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





        <link href="assets/CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="assets/CSS/js/bootstrap.min.js"></script>
       <script src="assets/CSS/js/bootstrap.min.js"></script>
       <link href="assets/CSS/navbar1n2.css" rel="stylesheet">
</head>

<body>
    <a name="home"></a>
    <div class="container-fluid" >
        <?php include("assets/IncludedFiles/mainnav.php") ?>
    </div>
    <div class="container" style="padding-top:100px;">
        <?php include ("assets/IncludedFiles/headerImage.php") ?>
    </div>

    <div class="container-fluid" style="padding-top:30px; padding-bottom:200px;">
      
        <h2><a name="articles" style="text-decoration:none;" href="../articles/article.php">Recent Articles</a></h2>
        <div class="row">
        <div class="col-xs-4">
          <h3>Article 1</h3>
          <p>Bats are mammals of the order Chiroptera (/kaɪˈrɒptərə/; from the Ancient Greek: χείρ - cheir, "hand"[1] 
            and Ancient Greek: πτερόν - pteron, "wing"[2])[3] whose forelimbs form webbed wings, making them the only 
            mammals naturally capable of true and sustained flight.[3] By contrast, other mammals said to fly, such as
             flying squirrels, gliding possums, and colugos, can only glide for short distances. Bats do not flap their
              entire forelimbs, as birds do, but instead flap their spread-out digits,[4] which are very long and covered
               with a thin membrane or patagium.<a href="">Read more</a></p>
        </div>
        <div class="col-xs-4">
            <h3>Article 2</h3>

          <p>Bats are the second largest order of mammals (after the rodents), representing about 20% of all classified
           mammal species worldwide, with about 1,240 bat species divided into two suborders: the less specialized and 
           largely fruit-eating megabats, or flying foxes, and the highly specialized and echolocating microbats.[5] About
            70% of bat species are insectivores. Most of the rest are frugivores, or fruit eaters. A few species, such as the
             fish-eating bat, feed from animals other than insects, with the vampire bats being hematophagous, or feeding on
              blood.<a href="">Read more</a></p>
        </div>
        <div class="col-xs-4">
          <h3>Article 3</h3>
          <p>Bats are present throughout most of the world, with the exception of extremely cold regions. They perform 
            the vital ecological roles of pollinating flowers and dispersing fruit seeds; many tropical plant species
             depend entirely on bats for the distribution of their seeds. Bats are economically important, as they 
             consume insect pests, reducing the need for pesticides. The smallest bat is the Kitti's hog-nosed bat, 
             measuring 29–34 mm (1.14–1.34 in) in length, 15 cm (5.91 in) across the wings and 2–2.6 g (0.07–0.09 oz)
              in mass.[6][7] It is also arguably the smallest extant species of mammal, with the Etruscan shrew being
               the other contender.<a href="">Read more</a></p>
               <a href="">Read previous articles</a>
        </div>
      </div>
    
    <div class="push"></div>
    <!--get footer -->
    <div id="footer" class="container=fluid">
        <a name="contact"> <?php include ("assets/IncludedFiles/footer.php") ?> </a>
    </div>
 </div>
  
  
</body>
</html>