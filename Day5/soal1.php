<?php

function datadiri($bb, $tb){
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

}
datadiri(70, 158);
echo '<br>';

function hari($tanggal){
    $day = date('l', strtotime($tanggal));

    if($day == 'Monday'){
        echo 'senin';
    }elseif ($day =='Tuesday'){
        echo 'selasa';
    }elseif ($day =='Wednesday'){
        echo 'rabu';
    }elseif ($day =='Thursday'){
        echo 'Kamis';
    }elseif ($day =='Friday'){
        echo 'Jumat';
    }
}
hari('2024-01-25');




?>