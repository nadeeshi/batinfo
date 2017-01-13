
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="jst.js"></script>
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
			<h1 style="color: blue;" >Help</h1></br>
			<img src="help.png" alt="help" style="width:304px;height:228px;">
		</div>
		</br>
		<div>
			<input type="button" style="width:20%;color: blue;" id="btnshow" value="user-manual.pdf">
			 
			</br></br>
			<iframe id="show_pdf" style="width: 800px; height: 550px;">
		</div>
		</center>
	</body>
	</html>





 