<!DOCTYPE html>
<html lang="en">
<head>
        
  <title>About Us | BatInfo</title>
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
  <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>
</head>

<body>
    <div>
      <?php include '../../assets/includedFiles/navbarTemplate.php'; ?>
    </div>
    <div class="row">
      <div class="col-sm-9 col-sm-push-2 col-xs-11 insert-form" style="margin-left: 3%;">
        <div>
          <h3>About BatsInfo</h3>
          <p>BatsInfo is a web system specially designed for researchers and those who are interested on bats to share 
          information about bats. This system provides a platform for researchers to input, store and retrieve research
          information about bats. These stored information can be viewed by general public as well</p>
          <?php
          echo $_SESSION['usr_id'];
          ?>
        </div>
        <div>
          <h3>Handled by</h3>
          <p>Zoological Department<br>
          Faculty of Science <br>
          University of Colombo</p>
        </div>
        <div>
          <h3>Maintained by</h3>
          <p>University of Colombo School of Computing<br>
          Ried Avanue<br>
          Colombo 07</p>
        </div>
      </div>
    </div>
    <?php
    $x=isset($_SESSION['usr_id']);
    echo ($x);
    ?>

    <!-- footer -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-2 col-xs-12">
        <?php include "../../assets/includedFiles/footer.php" ?>
      </div>  
    </div>

  
</body>
</html>