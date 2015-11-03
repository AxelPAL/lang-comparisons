<?php
$start = microtime(true);
$limit = 10000;
$e = 2;
for ($n = 1; $n <= $limit; $n++){
    $fact = gmp_fact($n + 1);
    $e += 1 / gmp_strval($fact);
}
$endTime = microtime(true) - $start;
echo "Exponential_function (GMP) = $e" . PHP_EOL;
echo "Time: " . $endTime . PHP_EOL;

function factorial($number) {

    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

$start = microtime(true);
$e = 2;
for ($n = 1; $n <= $limit; $n++){
    $fact = factorial($n + 1);
    $e += 1 / $fact;
}
$endTime = microtime(true) - $start;
echo "Exponential_function (function) = $e" . PHP_EOL;
echo "Time: " . $endTime . PHP_EOL;