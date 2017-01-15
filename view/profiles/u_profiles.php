
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

?>

<!DOCTYPE html>
<html>
<head>
	<title>profiles</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/profile.css">	
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../../assets/CSS/footer.css" rel="stylesheet">
    <script src="../../assets/JS/jquery.js"></script> 
    <script src="../../assets/JS/bootstrap.js"></script>

</head>
<body>
	<div class="public-background">
		<img src="../../assets/images/bat.jpg" width="100%" height="100%" >
	</div>
	<div>
		<?php include ("../../assets/IncludedFiles/mainnav.php"); ?>
	</div>
	<div class="col-xs-12 body-content">
		<div class="public-thread-content public-div-content col-xs-10">
			<div class="col-sm-12 col-xs-12 insert-form">
				<div class="container">
			
				<?php
					
					include ('../../database/dbconnect.php');
					$qry = "SELECT * FROM bat_info ;";
					$imgList =array(1,2,3,4);
					$desc = array(1,2,3,4);
					$caption =array(1,2,3,4);
					$id = array(1,2,3,4);
					//echo "lsdhk";
					$result = mysqli_query($con, $qry) or die();
		            $n=mysqli_num_rows($result);
					if (mysqli_num_rows($result) >= 3){
						for($i = 0 ; $i < $n;$i++){
							mysqli_data_seek($result,$i);
							$record = mysqli_fetch_assoc($result);
							$imgList[$i] ='../../assets/images/'.$record['pic'];
							$caption[$i] =$record['scientific_name'];
							$id[$i] =$record['bat_id'];
							
						}
					}					
				?>
		            <div class="s">
					
						<div class="row">
							<div class="col-md-12">
								<h3>bat profiles</h3>
							</div>
						</div>
		 
		                <?php

		                for ($i=0;$i<(($n/4)+1);$i++){
		                    $f=$i;
		                ?>

						<div class="row">
							<div class="col-md-12">
								<div class="ad">      
		                            <div class="row">
										<?php
		                                for($j=0;$j<4;$j++){
		                                    if((($f*4)+$j)<$n){
		            
		                                ?>
		                                
		                                <div class="col-md-3">
											<div class="x">
												<a class="aidanews2_img1" href=<?php echo "'../batmap/u_distribution_c.php?batid=".$id[($f*4)+$j]."'"; ?>>
													<img class="x" src="<?php echo $imgList[($f*4)+$j];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
												</a>
								
												<p class="aidanews2_title">
												<a href=<?php echo "'../batmap/u_distribution_c.php?batid=".$id[($f*4)+$j]."'"; ?>><?php echo $caption[($f*4)+$j]; ?></a>
												</p>
											</div>
										</div>
							
										<?php
		                                }}
		                                ?>

									</div>	
								</div>
							</div>
						</div>

		                <?php
		   
		                }
		                ?>
							<!--<div class="col-md-6">
							</div>-->
							
					</div>		
					
			</div>
		</div>
		</div>
		</div>
		
	

	<!-- start footer -->

	
	    <div class="col-sm-12 col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); ?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>