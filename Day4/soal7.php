<?php
$siswa = [
    [
        'nama' => 'Andi',
        'rombel' => 'pplg xi-3',
        'rayon' =>'Ciawi 4',
        'jk' => 'L',
    ],
    [
        'nama' => 'sasa',
        'rombel' => 'pplg xi-6',
        'rayon' => 'sukasari 1',
        'jk' => 'P',
    ],
    [
        'nama' => 'Lala',
        'rombel' => 'pplg xi-1',
        'rayon' => 'Cisarua 3',
        'jk' => 'P',
    ],
    [
        'nama' => 'Beni',
        'rombel' => 'pplg xi-2',
        'rayon' => 'cicurug 2',
        'jk' => 'L',
    ]
];

foreach ($siswa as $key => $isi) {
    echo " Nama : $isi[nama]<br>";
    echo " Rombel : $isi[rombel]<br>";
    echo " Rayon : $isi[rayon]<br>";
    echo " Jk : $isi[jk]<br>";
    echo "<br>";
}

?>
