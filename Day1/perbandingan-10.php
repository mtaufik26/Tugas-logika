
<?php
    $total = 154000;
    $diskon = 0.7;

    if($total > 100000){
        echo "Jumblah Bayar =". $total-($total * $diskon);
    }else{
        echo 'tidak dapat diskon';
    }
?> 