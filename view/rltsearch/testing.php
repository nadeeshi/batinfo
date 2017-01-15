<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include ('../../database/dbconnect.php');
?>

<!DOCTYPE html>
<html>
	
	<head>
	<title>thread</title>
	<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/testing.css">	
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../../assets/CSS/footer.css" rel="stylesheet">
    <script src="../../assets/JS/jquery.js"></script> 
    <script src="../../assets/JS/bootstrap.js"></script>

	</head>

<body>

	<div>
	<?php include('../../assets/IncludedFiles/navbarTemplate.php');?>
	</div>
	<div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
		<div class="container">

	<?php
	$count = 0;
		$count1 = 0;
		$count2 = 0;
	
	if($_POST){
	
		if(isset($_POST['address'])){
		
			$searchq = $_POST['address'];
			$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);		
		
			if(!empty($searchq)){
				
                $query = mysqli_query($con,"SELECT * FROM bat_info WHERE scientific_name LIKE '%$searchq%' 
				OR common_names Like '%$searchq%' OR
				synonyms LIKE '%$searchq%';") or die("could  not search");
                
				while($row = mysqli_fetch_assoc($query)){
					$fname = $row['scientific_name'];
					
                    $id = $row['bat_id'];
					
					$des = $row['other_details'];
					$count = 1;
		
				}
	
				include ("vm.php");
				
				$query = mysqli_query($con,"SELECT * FROM photos;") or die("could  not search");
	
				$num_rows = mysqli_num_rows($query);
	
	
				$dat = "zi";
				$ab = array();
				$d =array();
				$xx =array();
				$head =array();
				while($row = mysqli_fetch_assoc($query)){
					$cap = $row['caption'];
					$ds = $row['desc'];
					$idn = $row['id'];
					array_push($ab,$ds);
					array_push($d,$idn);
					array_push($head,$cap);
}
				for($i=0;$i<=$num_rows-1;$i++){
					SearchString($ab[$i], $searchq);
					if ($rec == 1){
						$count1=1;		
						$fo=$d[$i];		
						array_push($xx,$fo);
						$rec=0;
					}
					$r = count($xx);
		
				}
				if($count1==0){
					for($i=0;$i<=$num_rows-1;$i++){
						SearchString($head[$i], $searchq);
						if ($rec == 1){
							$count2=1;
							$fo=$d[$i];		
							array_push($xx,$fo);
							$rec=0;
						}
						$r = count($xx);		
					}		
				}
			}
		}
	}
?>
	
			<div class="row">
				<div  class="col-sm-1">
				</div>
				<div  class="col-sm-10">
					<?php if(($count==1)||($count1==1) ||($count2==1)){	?><h2> search results</h2><?php } else {?><h2>no result found</h2><?php }?>
				</div>
				<div  class="col-sm-1">
				</div>
			</div>	
			<div class="row">
				<div  class="col-sm-1">
				</div>
				<div  class="col-sm-10">
	
					<ul style="list-style-type:circle">
						<?php if($count ==1){?>
						<li><a  href=<?php echo "'../batmap/distribution_c.php?batid=".$id."'";?>><?php echo $fname;?></a></li>
						<?php echo $des;
						}		
						if(($count1 ==1)||($count2==1)){
							for($s=0;$s<$r;$s++){
				
						?>
						<li><a href=<?php echo "'../news/news_child.php?photoid=".$xx[$s]."'";?>><?php echo $head[$xx[$s]-1];?></a></li>
						<?php echo substr( $ab[$xx[$s]-1],0,150)."..."; 
							}
						}?>
					</ul>
				</div>
					
				<div  class="col-sm-1">
				</div>
			</div>  
		</div>
	</div>  
	
		<div class="col-sm-10 col-sm-push-2 col-xs-12">
		<?php include ("../../assets/IncludedFiles/footer.php"); ?>
		</div>  
	
</body>
</html>