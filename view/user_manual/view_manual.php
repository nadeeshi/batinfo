
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="../../assets/JS/jquery-1.11.3.min.js"></script>
		 <script type="text/javascript">
		$(function() {
			$('#btnshow').off().on({
				click: function(){
					$('#show_pdf').prop('src','load_manual.php');
				}
			})
		})
		</script>
	</head>
	
	<body>
		<center>
		<div>
			<h1 style="color: blue;" >User Manual</h1></br>

		</div>
		</br>
		<div>
			<input type="button" style="width:20%;color: black;" id="btnshow" value="Click To View PDF version">
			 
			</br></br>
			<iframe id="show_pdf" style="width: 850px; height: 550px;">
		</div>
		</center>
	</body>
	</html>





 