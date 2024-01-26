<?php
// Dari data di bawah siapakah yang lahin di bulan kabisat

$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Deni',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ]
];

echo "Orang yang lahir di tahun Kabisat adalah : ";

foreach ($data as $item) {
    $tahun = $item['tahun'];
    if ($tahun % 4 == 0) {
        echo $item['nama']. " ";
    }

}
?>



