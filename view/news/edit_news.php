
<?php
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);

include ('../../database/cnm_db_con.php');
/*
dbconnect.php
$con = mysqli_connect("localhost","root","","test2");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
$id=$_REQUEST['ed_id'];

$query = "SELECT * from news_before where nid = '".$_REQUEST['ed_id']."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>news edit</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/editnewschild.css">	
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
	<link href="../../assets/CSS/footer.css" rel="stylesheet">
    <script src="../../assets/JS/jquery.js"></script> 
    <script src="../../assets/JS/bootstrap.js"></script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	
	
	<!--<link rel="stylesheet" type="text/css" href="../css/editnewsmain.css">-->	
	
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
	
<style>

</style>	
	
	
	
</head>
<body>
	<div>
		<?php 
		include ("../../assets/IncludedFiles/navbarTemplate.php");// 
		?>
	</div>
	<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
	
		<div class="s">
		
			<form  method="post" enctype="multipart/form-data" action=""> 
				<div class="register-top-grid">
					<h3>INSERT NEWS</h3>
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['nid'];?>" />
					
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Select Image<label>*</label></span>
						<input type="file" name="image" required onchange="readURL(this);"><br />
						<img id="blah" src="#" alt=""/>						
					</div>
					</div>
					    <div class="form-group">
						<label for="inputEmail">title of the news</label>
						<input type="text" class="form-control" name="title" required value="<?php echo $row['title'];?>">
					</div>
					<!--<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Title<label>*</label></span>
						<input type="text" name="title" required value="<?php echo $row['title'];?>"> 
					</div>-->
					 
					 
					<textarea type="text" name="body" required value=""><?php echo $row['body'];?></textarea>
					<p><?php //echo $status; ?></p>
					<div class="clearfix"> </div>
					<div class="register-but">
								   
						<input type="submit" name="submit" value="view"></br> 
						<div class="clearfix"> </div>
				   
					</div>
				</div>	 
			</form>
				
				<!---->
			<?php 
				
				error_reporting(0);
				include ('../../database/cnm_db_con.php');
/*              dbconnect.php
				$con = mysqli_connect("localhost","root","","test2");

				if (mysqli_connect_errno()){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}*/
  
				if (isset($_POST['submit'])) {
					$file=$_FILES['image']['tmp_name'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
			
					move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/images/photos/" . $_FILES["image"]["name"]);
			
					$location=$_FILES["image"]["name"];

					$id=$_REQUEST['ed_id'];
					$tt =$_REQUEST['title'];
					$des = $_REQUEST['body'];
					//$update="update news_insert set news_id='".$ns_id."',title='".$tt."',image='".$location."', body='".$des."' where nid='".$id."'";

					$update="update news_before set title='".$tt."',image='".$location."', body='".$des."' where nid='".$id."'";

					
					$r=mysqli_query($con, $update) or die(mysqli_error());
					if (mysqli_query($con, $update)) {
				//echo $ns_id;
						header('Location:news_before.php?id='.$id);
						exit();   
					}else {
						echo "Error: " . $update . "<br>" . mysqli_error($con);
					}

					mysqli_close($con);
				
				}?>
				<!---->
		</div>
	</div>
	
	
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); //
		  ?>
	    </div>  
  	

	
	<?php
				
	ob_end_flush();?>

	<!-- end of footer -->
</body>
</html>