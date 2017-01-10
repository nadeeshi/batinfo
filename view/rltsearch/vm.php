<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");
@mysql_select_db("test2") or die("could not find");
?>

<html>
<head></head>
<body>
<?php
//global $rec ;
$rec =0;
function badCharHeuristic($str, $size, &$badchar){
	for ($i = 0; $i < 256; $i++)
		$badchar[$i] = -1;

	for ($i = 0; $i < $size; $i++)
		$badchar[ord($str[$i])] = $i;
}

function SearchString($str, $pat) {
	$m = strlen($pat);
	$n = strlen($str);
	$i = 0;

	badCharHeuristic($pat, $m, $badchar);

	$s = 0;
	while ($s <= ($n - $m)){
		$j = $m - 1;

		while ($j >= 0 && $pat[$j] == $str[$s + $j])
			$j--;

		if ($j < 0){
			$arr[$i++] = $s;
			$s += ($s + $m < $n) ? $m - $badchar[ord($str[$s + $m])] : 1;
		}
		else
			$s += max(1, $j - $badchar[ord($str[$s + $j])]);
	}
	//echo count($arr);
	if($i>0){
	global $rec ;
	$rec =1;
	//echo $rec;
	for ($j = 0; $j < $i; $j++){
		//if(count($arr)>0){
		$result[$j] = $arr[$j];//}
	}
	return $result;
}else{
	//echo  "nothing";
	return 0; }
	}

?>
</body>
</html>