
<?php include("../../controller/insert/news_db_insert.php");

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
        
           
            
            function validation(){
                var vimage = document.forms["news"]["image"].value;
                if (vimage == null || vimage == "") {
                    alert("you must have selected a image file before proceed");
                    return false;
                }
                
                var vtitle = document.forms["news"]["title"].value;
                if (vtitle == null || vtitle == "") {
                    alert("you must have filled out this 'title' field before proceed");
                    return false;
                }
                var content = tinymce.get('body').getContent({format: 'text'});
               
                if($.trim(content) == '')
                {
                    alert("'description' field is empty can not proceed");
                    return false;                 
                }
                
                
                
            }
            
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
        /*if(isset($_SESSION['usr_id'])){echo $_SESSION['usr_id'];}*/
	</div>
	<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
	
		<div class="s">
		
			<form  name="news" method="post" enctype="multipart/form-data" action="" onsubmit="return validation()"> 
				<div class="register-top-grid">				
					<h3>INSERT NEWS</h3>
					<input type="hidden" name="new" value="1" />

				


					<div class="form-group" >						
                        <label for="inputtitle">Select an image</label>
						<input type="file" name="image"  required onchange="readURL(this);"><br />
						<img id="blah" src="" alt="your image"/>

						
					</div>
				    <div class="form-group">
						<label for="inputtitle">Enter a title for the news</label>
						<input type="text" class="form-control" name="title" required  placeholder="title">
					</div>
					
                    <div class="form-group">
						<label for="inputnew_body">Enter enter your description for the above title </label>
					   <textarea type="text" name="body" class="form-control"></textarea>
					</div>
                    
					<div class="clearfix"> </div>
					<div class="register-but">
                    <label>to get a view before your news is published hit 'view' button here</label>    
					</br><input type="submit" name="submit" value="view" onclick="alert('view of your submission')"></br>				   
					 
					<div class="clearfix"> </div>
				   
					</div>
				</div>	 
			</form>
		<label>to cancel your submission hit 'cancel' button</label>    
					</br>	     
        <a class="btn btn-default btn-sm" href="" onclick="alert('cancel the procedure')">cancel</a>
             
		</div>
	</div>
	
	    <div class="col-sm-10 col-sm-push-2 col-xs-12">
	      <?php include ("../../assets/IncludedFiles/footer.php"); //?>
	    </div>  
  	


	<!-- end of footer -->
</body>
</html>