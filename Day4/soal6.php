<?php
$a = 225;
$b = 5;
$c = 25;
$d = 0;

for ($i = $b; $i <= $c ; $i += 5) 
    $d += !($a % $i);
echo "bilangan $a bisa dibagi habis oleh bilangan kelipatan 5 sebanyak $d kali";

?>