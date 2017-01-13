<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php
		$file='user-manual.pdf';
		$filename = 'user-manual.pdf';
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Ranges: bytes');
		@readfile($file);
		?>
	</body>

<?php
/*
$myfile = fopen("User.pdf", "r") or die("Unable to open file!");
echo fread($myfile,filesize("User.pdf"));
fclose($myfile);
*/

?>
</html>






 