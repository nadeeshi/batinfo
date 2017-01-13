<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/editnewsmain.css">	
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
		<?php 
		include ("../../assets/IncludedFiles/mainnav.php"); ?>
	</div>
	<div class="col-xs-12 body-content">
	<div class="public-thread-content public-div-content col-xs-10">
	<div class="col-sm-12 col-xs-12 insert-form">
	<div class="container">
	
	<?php 
					include ('../../database/cnm_db_con.php');//dbconnect.php
					$qry = "SELECT * FROM photos ORDER BY id DESC;";
					$imgList =array();
					$desc = array();
					$caption =array();
					$id = array();
					$result = mysqli_query($con, $qry) or die();
					$x=mysqli_num_rows($result);
					if ($x >= 4){
						for($i = 0 ; $i < $x;$i++){
							mysqli_data_seek($result,$i);
							$record = mysqli_fetch_assoc($result);
							$imgList[$i] ='../../assets/images/photos/'.$record['location'];
							$desc[$i] = $record['desc'];
							$caption[$i] =$record['caption'];
							$id[$i] =$record['id'];
							
						}
					}
					//echo $desc[7];
					//$_GET['page']="";
					if(isset($_GET['page'])){
						
						$page = $_GET['page'];
						
						//echo $page;
					}else{
					$page=0;}
					
					
					?>
						
		

		
			<div class="s">
		
			<div class="row">
				
				<div class="col-md-6">
					<div class="inrow">
					<div class="row">
						<div class="col-md-6">
							<a class="aidanews2_img1" href=<?php echo "'u_news_child.php?photoid=".$id[0+(4*$page)]."'"; ?>>
								<img src="<?php echo $imgList[0+(4*$page)];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
							</a>
						</div>
						
						<div class="col-md-5">
							<div class="aidanews2_mainC">
								<h3 class="aidanews2_title press-release">
									<a href=<?php echo "'u_news_child.php?photoid=".$id[0+(4*$page)]."'"; ?>><?php echo $caption[0+(4*$page)]; ?></a>
								</h3>					
								<span class="aidanews2_text">
									<?php echo substr($desc[0+(4*$page)],0,150)."..."; ?>
								</span>					
								<a href=<?php echo "'u_news_child.php?photoid=".$id[0+(4*$page)]."'"; ?> class="readon">
									<span class="aidanews2_readmore">Read More</span>
								</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				
				<!-- start of next column -->	
				
				<div class="col-md-6">
					<div class="inrow">
					<div class="row">
						<div class="col-md-6">
							<a class="aidanews2_img1" href=<?php echo "'u_news_child.php?photoid=".$id[1+(4*$page)]."'"; ?>>
								<img src="<?php echo $imgList[1+(4*$page)];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
							</a>
						</div>
						
						<div class="col-md-5">
							<div class="aidanews2_mainC">
								<h3 class="aidanews2_title">
									<a href=<?php echo "'u_news_child.php?photoid=".$id[1+(4*$page)]."'"; ?>><?php echo $caption[1+(4*$page)]; ?></a>
								</h3>					
								<span class="aidanews2_text">
									<?php echo substr($desc[1+(4*$page)],0,150)."..."; ?>
								</span>					
								<a href=<?php echo "'u_news_child.php?photoid=".$id[1+(4*$page)]."'"; ?> class = "readon">
									<span class="aidanews2_readmore">Read More</span>
								</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				
			</div>
		</div>	
	<!-- start of next row -->				
			
			<div class="row">
				<div class="col-md-12">
				
				</div>
			</div>
			
			
	<!-- start of next row -->
		<div class="s">
			<div class="row">
				<div class="col-md-6">
					<div class="inrow">
					<div class="row">
						<div class="col-md-6">
							<a class="aidanews2_img1" href=<?php echo "'u_news_child.php?photoid=".$id[2+(4*$page)]."'"; ?>>
								<img src="<?php echo $imgList[2+(4*$page)];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
							</a>
						</div>
						
						<div class="col-md-5">
							<div class="aidanews2_mainC">
								<h3 class="aidanews2_title press-release">
									<a href=<?php echo "'u_news_child.php?photoid=".$id[2+(4*$page)]."'"; ?>><?php echo $caption[2+(4*$page)]; ?></a>
								</h3>					
								<span class="aidanews2_text">
									<?php echo substr($desc[2+(4*$page)],0,150)."..."; ?>
								</span>					
								<a href=<?php echo "'u_news_child.php?photoid=".$id[2+(4*$page)]."'"; ?> class="readon">
									<span class="aidanews2_readmore">Read More</span>
								</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				
			<!-- start of new column -->	
				
				<div class="col-md-6">
					<div class="inrow">
					<div class="row">
						<div class="col-md-6">
							<a class="aidanews2_img1" href=<?php echo "'u_news_child.php?photoid=".$id[3+(4*$page)]."'"; ?>>
								<img src="<?php echo $imgList[3+(4*$page)];?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "display: block; max-height: 25em ; min-height:14em; width: 100%; height:auto;"/>
							</a>
						</div>
						
						<div class="col-md-5">
							<div class="aidanews2_mainC">
								<h3 class="aidanews2_title press-release">
									<a href=<?php echo "'u_news_child.php?photoid=".$id[3+(4*$page)]."'"; ?>><?php echo $caption[3+(4*$page)]; ?></a>
								</h3>					
								<span class="aidanews2_text">
									<?php echo substr($desc[3+(4*$page)],0,150)."..."; ?>
								</span>					
								<a href=<?php echo "'u_news_child.php?photoid=".$id[3+(4*$page)]."'"; ?> class="readon">
									<span class="aidanews2_readmore">Read More</span>
								</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			</div>
	</div>
	
	<!-- start of new row -->
	
		<div class="row">
				<div class="col-md-12">
					<div class="center">
  
  
  <ul class="pagination">
    
      <li><a href="#"><b> &#x226A </b></a></li>
    <li><a  <?php $color = "style='background-color:#5a5452'";
					echo (!(isset($_GET['page']))) ? $color : "";
	echo "href='u_newst.php'"; ?>>1</a></li>
	<?php 
		$r=floor($x/4);
		for($i=2;$i<=$r;$i++){
		$f=$i-1;
		//echo $f;
	?>
    <li><a <?php echo "href='u_newst.php?page=$f'"; if(isset($_GET['page'])) echo ($_GET['page']==$f) ? $color : "";?>><?php echo $i;?></a></li><?php }?>

    <li><a href=""><b> &#x226B </b></a></li>
      
  </ul>
</div>
				</div>
		</div>

</div>
</div>
</div>
	<!-- start footer -->

	
	    <div class="col-sm-12  col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); ?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>