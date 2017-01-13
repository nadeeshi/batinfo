<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/cnm_db_con.php');/*
dbconnect.php
@mysql_connect("localhost","root","") or die("could not connect");
@mysql_select_db("test2") or die("could not find");*/
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
	<div>
		<?php include ("../../assets/IncludedFiles/navbarTemplate.php"); ?>
	</div>
	<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
		<div class="container">
	
		<?php
			$mysql_hostname = "localhost";
			$mysql_user = "root";
			$mysql_password = "";
			$mysql_database = "project";
			$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
			//bat_info
			$qry = "SELECT * FROM bat_info ;";
			$imgList =array(1,2,3,4);
			$desc = array(1,2,3,4);
			$caption =array(1,2,3,4);
			$id = array(1,2,3,4);
			//echo "lsdhk";
			$result = mysqli_query($con, $qry) or die();
			if (mysqli_num_rows($result) >= 3){
				for($i = 0 ; $i < 9;$i++){
					mysqli_data_seek($result,$i);
					$record = mysqli_fetch_assoc($result);
					$imgList[$i] ='../../assets/images/'.$record['pic'];
							//$desc[$i] = $record['desc'];
					$caption[$i] =$record['scientific_name'];
					$id[$i] =$record['bat_id'];
					//$id[$i] =$record['bat_id'];
                    //$caption[$i] =$record['sciencetific_name'];
				}
			}					
		?>
<div class="s">
			
				<div class="row">
					<div class="col-md-12">
						<h3>bat profiles</h3>
					</div>
				</div>
		
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
											<img class="x" src="<?php echo $imgList[0];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[0]; ?></a>
										</p>
									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
											<img class="x" src="<?php echo $imgList[1];?>" alt="" style = "display: block; max-height: 20em ;    min-height:14em; width: 100%; height:auto;"/>

										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[1]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
											<img class="x" src="<?php echo $imgList[2];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[3]."'";  ?>>
											<img class="x" src="<?php echo $imgList[3];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[3]; ?></a>
										</p>

									</div>
								</div>
					
					
							</div>	
						</div>
					</div>
				</div>
					<!--<div class="col-md-6">
					</div>-->
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
				
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[4]."'"; ?>>
											<img class="x" src="<?php echo $imgList[4];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[4]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[5]."'"; ?>>
											<img class="x" src="<?php echo $imgList[5];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[5]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[6]."'"; ?>>
											<img class="x" src="<?php echo $imgList[6];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[6]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[7]."'";  ?>>
											<img class="x" src="<?php echo $imgList[7];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[7]; ?></a>
										</p>

									</div>
								</div>
					
					
							</div>
						</div>
					</div>	
				</div>
				
				<!---->
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
				
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[8]."'"; ?>>
											<img class="x" src="<?php echo $imgList[8];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[8]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
											<img class="x" src="<?php echo $imgList[0];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[0]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>>
											<img class="x" src="<?php echo $imgList[1];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[1]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'";  ?>>
											<img class="x" src="<?php echo $imgList[2];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[2]; ?></a>
										</p>

									</div>
								</div>
					
					
							</div>
						</div>	
					</div>	
				</div>
				
				<!---->
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[3]."'"; ?>>
											<img class="x" src="<?php echo $imgList[3];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[3]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[4]."'"; ?>>
											<img class="x" src="<?php echo $imgList[4];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[4]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[5]."'"; ?>>
											<img class="x" src="<?php echo $imgList[5];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[5]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[6]."'";  ?>>
											<img class="x" src="<?php echo $imgList[6];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[6]; ?></a>
										</p>

									</div>
								</div>
					
					
					
							</div>
						</div>	
					</div>	
				</div>
				
				<!---->
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[7]."'"; ?>>
											<img class="x" src="<?php echo $imgList[7];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[7]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[8]."'"; ?>>
											<img class="x" src="<?php echo $imgList[8];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[8]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>>
											<img class="x" src="<?php echo $imgList[0];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[0]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'";  ?>>
											<img class="x" src="<?php echo $imgList[1];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[1]; ?></a>
										</p>

									</div>
								</div>
					
					
							</div>	
						</div>	
					</div>	
				</div>
				
				<!---->
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
											<img class="x" src="<?php echo $imgList[2];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[2]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[3]."'"; ?>>
											<img class="x" src="<?php echo $imgList[3];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[3]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[4]."'"; ?>>
											<img class="x" src="<?php echo $imgList[4];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[4]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[5]."'";  ?>>
											<img class="x" src="<?php echo $imgList[5];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[5]; ?></a>
										</p>

									</div>
								</div>
					
					
							</div>	
						</div>	
					</div>	
				</div>
				
				
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[6]."'"; ?>>
											<img class="x" src="<?php echo $imgList[6];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
											<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'"; ?>><?php echo $caption[6]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[7]."'"; ?>>
											<img class="x" src="<?php echo $imgList[7];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[1]."'"; ?>><?php echo $caption[7]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
											<img class="x" src="<?php echo $imgList[2];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
											<img class="x" src="<?php echo $imgList[0];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
										</p>

									</div>
								</div>
									
					
					
							</div>	
						</div>	
					</div>	
				</div>
				
				
				
				<div class="row">
					<div class="col-md-12">
						<div class="ad">
							<div class="row">
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>>
											<img class="x" src="<?php echo $imgList[2];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[2]."'"; ?>><?php echo $caption[2]; ?></a>
										</p>

									</div>
								</div>
					
								<div class="col-md-3">
									<div class="x">
										<a class="aidanews2_img1" href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>>
											<img class="x" src="<?php echo $imgList[0];?>" alt="" style = "display: block; max-height: 20em ; min-height:14em; width: 100%; height:auto;"/>
										</a>
						
										<p class="aidanews2_title">
										<a href=<?php echo "'../batmap/distribution_c.php?batid=".$id[0]."'";  ?>><?php echo $caption[0]; ?></a>
										</p>

									</div>
								</div>
				
							</div>	
						</div>	
					</div>	
				</div>
					
			</div>		
			
				
				
		</div>
	</div>
	

	<!-- start footer -->

	
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); ?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>