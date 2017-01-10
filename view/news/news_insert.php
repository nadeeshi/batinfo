
<?php include("../../controller/insert/news_db_insert.php");
//echo $fid;
?>

<!DOCTYPE html>
<html>
<head>
	<title>news insert</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/.css">	
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../../assets/CSS/footer.css" rel="stylesheet">
    <script src="../../assets/JS/jquery.js"></script> 
    <script src="../../assets/JS/bootstrap.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="../css/editnewsmain.css">-->	
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	
	<script type="text/javascript">

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah')
						.attr('src', e.target.result)
						.width(150)
						.height(200);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}
			
	</script>		
	
</head>
<body>
	<div>
		<?php //
		include ("../../assets/IncludedFiles/navbarTemplate.php"); ?>
	</div>
	<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
	
		<div class="s">
		
			<form  method="post" enctype="multipart/form-data" action=""> 
				<div class="register-top-grid">				
					<h3>INSERT NEWS</h3>
					<input type="hidden" name="new" value="1" />

					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Select Image<label>*</label></span>
						<input type="file" name="image" onchange="readURL(this);"><br />
						<img id="blah" src="#" alt=""/>
						
					</div>
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Title<label>*</label></span>
						<input type="text" name="title" required> 
					</div>
					 					 
					<textarea type="text" name="body"></textarea>
					<p><?php //echo $status; ?></p>
					<div class="clearfix"> </div>
					<div class="register-but">
					<input type="submit" name="submit" value="submit"></br>				   
					   
					<div class="clearfix"> </div>
				   
					</div>
				</div>	 
			</form>
			
		</div>
	</div>
	
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); //?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>