<?php
ob_start(); 
@session_start();

include_once '../../database/dbconnect.php';

ob_end_flush();
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

			                <?php
			                 if (isset($_SESSION['usr_id'])) { ?>
			                <li><a href="../../controller/login/logout.php" class="navbar-head-list">Log Out</a></li>
			                <?php } else { ?>
			                <li><a class="navbar-head-list" href="login.php">Login</a></li>
			                <li><a class="navbar-head-list" href="../../controller/login/logout.php">Sign Up</a></li>
			                <?php } ?>
			              
			            </ul>
			             
			            <form class="navbar-form  navbar-right" action="../../view/rltsearch/testing.php" method="post">
	      					<div class="form-group">
	        					<input type="text" class="form-control form-control-custom input-area" name='address' placeholder="Enter name here">
	      					</div>
	  						<button type="submit" class="btn btn-default btn-search">Search</button>
						</form> 
			            <ul class="nav navbar-nav navbar-right">
			                <?php if (isset($_SESSION['usr_id'])) { ?>
			                <li><a href= "../../view/UserProfile/profile.php?id=<?php echo $_SESSION['usr_id'];?>" class="navbar-head-list"> <?php echo $_SESSION['usr_name']; ?></a></li>
			                <?php } else { ?>
			                <!-- <li><a href="login.php">Login</a></li>
			                <li><a href="register.php">Sign Up</a></li> -->
			                <?php } ?>
			            </ul>
		        	</div>
		        	<li class="min-link"><a href= "#" class="navbar-head-list"><?php echo $_SESSION['usr_name']; ?></a></li>
		            <li class="min-link"><a href="../../controller/graph/graph.php">Home</a></li>
		            <li class="min-link"><a href="../../view/profiles/profiles.php">Bats Info</a></li>
		            <li class="min-link"><a href="../nadee/listOfResearch.php">Research Info</a></li>
                    <li class="min-link"><a href="../../view/research_papers/research_papers_view.php">Research Papers</a></li>
		            <li class="min-link"><a href="../../view/forum/forumTopics.php">Forum</a></li>
		            <li class="min-link"><a href="../../view/news/newst.php">News</a></li>
		            <li class="min-link"><a href="../help/index.php">Help</a></li>
		            <li class="min-link"><a href="../../view/aboutUs/aboutUs.php">About Us</a></li>
		            <li class="min-link"><a href="../../controller/login/logout.php">Log Out</a></li>
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
 				<img style='height: 100%; width: 100%; object-fit: contain' src="../../assets/images/bubble.png"/>
 			</div>
			<nav class="list-of-content">
			  <ul class="mainmenu nav nav-pills nav-stacked">
			    <li><a href="../../controller/graph/graph.php">Home</a></li>
			    <li><a href="">Bats Information</a>
			    	<ul class="submenu nav-pills nav-stacked">
                           
                            <li><a href="../../view/insert/insert_form.php">Insert</a></li>
                            <li><a href="../../view/delete_update/delete_home.php">Delete</a></li>
                            <li><a href="../../view/delete_update/edit_home.php">Update</a></li>
                            <li><a href="../../view/profiles/profiles.php">Bat Profile</a></li>
                    </ul>
			    </li>
                 <li><a href="">Research Papers</a> 
                     <ul class="submenu nav-pills nav-stacked">
				        <li><a href="../../view/research_papers/research_papers_view.php">View</a></li>
                        <li><a href="../../view/research_papers/research_papers.php">Upload</a></li>
                        <li><a href="../../view/research_papers/research_papers_del_home.php">Delete</a></li>
                        <li><a href="../../view/research_papers/research_papers_update_home.php">Update</a></li>>
			      	</ul>
			    <li><a href="../../view/forum/forumTopics.php">Forum</a>
			    </li>
			    <li><a href="">News</a>
			    	<ul class="submenu nav-pills nav-stacked">
			    		<li><a href="../../view/news/newst.php">Recent News</a></li>
			    		<li><a href="../../view/news/news_insert.php">Add News</a></li>
			    	</ul>
			    </li>
			    <li><a href="">Help</a>
			    	<ul class="submenu nav-pills nav-stacked">
			    		<li><a href="../../view/help/index.php">FAQs</a></li>
			    		<li><a href="../../view/user_manual/display_manual.php">User Manual</a></li>
			    	</ul>
			    </li>
			    <li><a href="../../view/aboutUs/aboutUs.php">About Us</a></li>
			  </ul>
			</nav>
		</div>
    <!-- end of the side navigation bar -->
	</div>
</div>


