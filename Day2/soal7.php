<?php
$nasigoreng = 15000;
$nasikebuli = 25000;
$ayambakar = 20000;
$totalpembelian = ($nasikebuli*2)+$ayambakar+($nasigoreng*2);
$hariini = date('l');

if ($hariini == 'Monday') {
    echo " Total pembayaran setelah diskon 2% :". $totalpembelian-($totalpembelian/0.02);
}else if ($hariini == 'Friday') {
    echo " Total pembayaran setelah diskon 5% :". $totalpembelian-($totalpembelian/0.05);
}else{
    echo "pembayaran tidak mendapatkan diskon, total pembayaran adalah :". $totalpembelian;
}

?>

