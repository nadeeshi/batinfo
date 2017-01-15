<!DOCTYPE html>
<html>
<head>
	<title>bat detail</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
		<link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../../assets/CSS/mapstyleCopy.css">	
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

		<?php
			
			include ('from_search_image.php');	
			if($count ==1){
		//echo $id;
		?>
		<div class="container">
            <div class="row">
                    
                <div class="col-md-12">
                    <div class="com">
						
						
						<div class="row">
							<div class="col-xs-12">
								<h3 style="text-align:center">Bat Profile</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="inblock">
									
									<div class="row">
										<div class="col-sm-12">
											<p>                            
												<a class="aidanews2_img1" href="">
													<img src="<?php echo $img;?>" alt="Img" style = "float: right ;margin: 0px 15px 15px 20px; max-height: 20em ; min-height:14em; width: 20%; height:auto;"/>
												</a>
												<div class="des" style="color: #2D343E; font: bold 15px/30px 'Alike Angular', serif; !important;">
												<?php echo $output;?> </br>
												
												</div>
											</p>
										</div>
									</div>
                                    

								</div>
								<div class="row">
									<div class="col-sm-12">
									<?php include ('from_search_map.php');?>
									</div>
								</div>

							</div>
                            
						</div>
						<div class="row">
						<div class="col-md-12">
												
								<p style="text-align:right">create a pdf<br>of this infomation<br>
						
									<a href=<?php echo "'../gen_pdf/gen_pdf.php?id=".$id."'"; ?>>
									<img src="../../assets/images/pdf.png" alt="pdf" />
						
									</a>
								</p>
						</div>
						
					</div>
					
					</div>
				</div>
            </div>
        </div>
    </div>
	
	
	
<?php 
	}
	else{
?>	
	
	<div id="page">
		<div id="header">
			
		</div>
		
		<div id="contents">
				 
			<div class="background">
		
				<div id="news">
								
					<h4>OOPS!!! NO MATCH FOUND</h4>
					<ul>
						<li>
							<img src="../../assets/images/404.jpg" alt="404" style = "display: block; margin:auto !important;  height: 80% ; width: 100%; height:auto;"/>
						</li>
					</ul>
				
				</div>
			</div>
			<div id="footer">
			</div>	
		</div>

	</div>
	
	<?php }?>
	
	</div>


	<!-- start footer -->

	
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
		  <?php include ("../../assets/IncludedFiles/footer.php"); ?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>