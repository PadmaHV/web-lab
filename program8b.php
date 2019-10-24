<?php
$a1 = array(
	array(1,2),
	array(3,4)
	);
$a2 = array(
	array(5,6),
	array(7,8)
	);
	
$result = array(
	  array(0,0),
	  array(0,0));
for($i = 0; $i < 2; $i++)
	for($j = 0; $j < 2; $j++)
		for($k = 0; $k < 2; $k++)
			$result[$i][$j] += $a1[$i][$k] + $a2[$k][$j];
	
echo "<h2>Multiplication of two matrix</h2><br>";
for($i = 0; $i < 2; $i++) {
	for($j = 0; $j < 2; $j++)
		echo "".$result[$i][$j]." ";
	echo "<br>"; }
?>
