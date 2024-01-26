<?php
$andi = 2004; 
$eko = 2001;

if ($andi % 4 == 0 && $eko % 4 == 0) {
    echo 'keduanya lahir di tahun kabisat';
}else if ($andi % 4 == 0) {
    echo 'andi lahit ditahun kabisat';
}else if ($eko % 4 == 0) {
    echo 'eko lahit ditahun kabisat';
}else{
    echo 'keduanya tidak lahit di tahun kabisat '; 
}
?>