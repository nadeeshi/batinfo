<?php
session_start();

include_once 'dbconnect.php';

?>
<!-- start of the heading naavigation bar -->
<!-- <div class="nav-header"> -->
<div>
	<nav class="navbar navbar-default navbar1 navbar-li">
		<div class="container-fluid"> 
  		<!-- Brand and toggle get grouped for better mobile display -->
	  		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	      			<span class="sr-only">Toggle navigation</span>
	      			<span class="icon-bar"></span>
	      			<span class="icon-bar"></span>
	      			<span class="icon-bar"></span>
	    			</button>
	    			<a class="navbar-brand" href="#"><span class="header1" >Bats</span><span class="header2">Info</span></a>
	  		</div>

  			<!-- Collect the nav links, forms, and other content for toggling -->
      
	  		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    		<ul class="nav navbar-nav  navbar-right navbar-li">
		            <div class="collapse navbar-collapse" id="navbar1">
			            <ul class="nav navbar-nav navbar-right">
			                <?php if (isset($_SESSION['usr_id'])) { ?>
			                <li><a href="logout.php" class="navbar-head-list">Log Out</a></li>
			                <?php } else { ?>
			                <li><a class="navbar-head-list" href="login.php">Login</a></li>
			                <li><a class="navbar-head-list" href="register.php">Sign Up</a></li>
			                <?php } ?>
			            </ul>
			            <form class="navbar-form  navbar-right" action="../search/testing.php" method="post">
	      					<div class="form-group">
	        					<input type="text" class="form-control input-area" name='address' placeholder="Enter name here">
	      					</div>
	  						<button type="submit" class="btn btn-default">Search</button>
						</form> 
			            <ul class="nav navbar-nav navbar-right">
			                <?php if (isset($_SESSION['usr_id'])) { ?>
			                <li><a href= "#" class="navbar-head-list"><?php echo $_SESSION['usr_name']; ?></a></li>
			                <?php } else { ?>
			                <!-- <li><a href="login.php">Login</a></li>
			                <li><a href="register.php">Sign Up</a></li> -->
			                <?php } ?>
			            </ul>
		        	</div>
		        	<li class="min-link"><a href= "#" class="navbar-head-list"><?php echo $_SESSION['usr_name']; ?></a></li>
		            <li class="min-link"><a href="../phpPages/researcherHomePage.php">Home</a></li>
		            <li class="min-link"><a href="../nadee/listOfBats.php">Bats Info</a></li>
		            <li class="min-link"><a href="../nadee/listOfResearch.php">Research Info</a></li>
		            <li class="min-link"><a href="../../view/forum/forumTopics.php">Forum</a></li>
		            <li class="min-link"><a href="../batnews/grid31.php">News</a></li>
		            <li class="min-link"><a href="../help/index.php">Help</a></li>
		            <li class="min-link"><a href="../phpPages/aboutUs.php">About Us</a></li>
		            <li class="min-link"><a href="logout.php">Log Out</a></li>
		   		</ul>
	  		</div> <!-- /.navbar-collapse -->
    	</div>
 	<!-- /.container-fluid -->
	</nav>
<!-- End of the heading navigation bar -->

  	<div> 
    <!-- start of the side navigation bar -->
 		<div class="col-xs-2 list-container mini-bar">
 			<div class="profile-picture">
 				<!-- <img src="../img/proPic.png"> -->
 			</div>
			<ul class="nav nav-pills nav-stacked list-of-content">
				<li><a href="../phpPages/researcherHomePage.php">Home</a></li>
        		<li><a href="../nadee/listOfBats.php">Bats Info</a></li>
        		<li><a href="../nadee/listOfResearch.php">Research Info</a></li>
				<li><a href="../../view/forum/forumTopics.php">Forum</a></li>
				<li><a href="../batnews/grid31.php">News</a></li>
        		<li><a href="../help/index.php">Help</a></li>
				<li><a href="../phpPages/aboutUs.php">About Us</a></li>
			</ul>
		</div>
    <!-- end of the side navigation bar -->
	</div>
</div>


