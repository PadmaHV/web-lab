<?php
$a1 = array(
	array(1,2),
	array(3,4)
	);
$a2 = array(
	array(5,6),
	array(7,8)
	);
	
$result = array();
for($i = 0; $i < 2; $i++)
	for($j = 0; $j < 2; $j++)
		$result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
	
echo "<h2>Addition of two matrix</h2><br>";
for($i = 0; $i < 2; $i++){
	for($j = 0; $j < 2; $j++)
		echo "".$result[$i][$j]." ";
	echo "<br>";
}
?>
