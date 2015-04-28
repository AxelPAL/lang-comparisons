<?php
$num = 4.0;
$pi = 0;
$plus = true;
$startTime = microtime(true);
$den = 1;
while ($den < 100000000){
	if ($plus){
		$pi = $pi + $num/$den;
    	$plus = false;
	}    
  else{
	$pi = $pi - $num/$den;
    $plus = true;
  }
  $den = $den + 2;
}

echo "PI = $pi\n";              # calculated value of pi
echo "Math::PI = " . pi() . "\n";  # pi from the math class
$endTime = microtime(true);
echo $endTime - $startTime;