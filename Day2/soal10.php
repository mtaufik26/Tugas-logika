<?php 
$belanja = 150000;
$voucher = 10000;

if ($belanja > 150000) {
    echo "Anda mendapatkan voucher potongan harga sebesar Rp " .$voucher." dan 1 dus permen kaki";
} elseif ($belanja >  100000) {
    echo "Anda mendapatkan voucher potongan harga sebesar Rp ". $voucher;
} else {
    echo "Anda tidak mendapatkan voucher potongan harga";
}
?>
