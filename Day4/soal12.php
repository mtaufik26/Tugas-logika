<?php
//tampilkanlah data dibawah ini yang hanya memiliki diskon
$barang = [
    [
        'nama' => 'Ban',
        'diskon' => '10%',
    ],
    [
        'nama' => 'Oli Mesin',
    ],
    [
        'nama' => 'Kampas Rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => '9%',
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => '7%',
    ]
];

foreach ($barang as $item) {
    if (array_key_exists('diskon', $item)) {
        echo "Nama: " . $item['nama'] . "<br>";
        echo "Diskon: " . $item['diskon'] . "<br>";
        echo "<br>";
    }
}
?>
