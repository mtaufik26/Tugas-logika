<?php
    $jamkerja = 8;
    $kompensasi = 30000;
    $waktikerja = 14;

    if ($waktikerja > $jamkerja) {
        echo 'kompensas yang didapat Dina : ' . $kompensasi * ($waktikerja - $jamkerja);
    }else {
        echo 'Dina tidak mendaparka kompensasi';
    }
?>
