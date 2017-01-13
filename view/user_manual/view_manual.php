
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--<script src="jst.js"></script>-->
		<script type="text/javascript">
			$(function() {
				$('#btnshow').off().on({
					click: function() {
						$('#show_pdf').prop('src','load_manual.php');
					}
				});
			});
		</script>
	</head>
	
	<body>
		<center>
		 
		</br>
		<div>
			<input type="button" style="width:20%;color: blue;" id="btnshow" value="Display pdf">
			</br></br>
			<iframe id="show_pdf" style="width: 800px; height: 550px;">
		</div>
		</center>
	</body>
	</html>







 