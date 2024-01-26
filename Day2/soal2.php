<?php
$usia = 12;

    if ($usia >= 6 && $usia < 12) {
        echo "Untuk usia $usia Waktu tidur yang disarankan: 10 jam";
    } else if ($usia >= 12 && $usia < 18) {
        echo "Untuk usia $usia Waktu tidur yang disarankan: 8-9 jam";
    } else if ($usia >= 18 && $usia < 40) {
        echo "Untuk usia $usia Waktu tidur yang disarankan: 7-8 jam";
    }
?>
