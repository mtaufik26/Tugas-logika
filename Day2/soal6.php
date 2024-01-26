<?php
$bb = 70; 
$tb = 158;
$int = $bb / (($tb/100) **2);

    if ($int < 18.5) {
        echo "Berat Bada Kurang";
    } else if ($int > 18.5 && 22.9) {
        echo "Berat Badan Normal";
    } else if ($int > 22.9 && 24.9) {
        echo "Berat Badan Lebih";
    }else{
        echo 'Obesitas';
    }
?>