<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '18000',
        'jumblah_barang' =>'1',
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumblah_barang' => '3',
    ],
    [
        'nama_barang' => 'Aloe Vera Shaet Mask',
        'harga_barang' => '15000',
        'jumblah_barang' => '5',
    ]
];

$total_pembayaran = 0; 

foreach ($barang as $key => $item) {
    $total_barang = $item['harga_barang'] * $item['jumblah_barang'];
    $total_pembayaran += $total_barang;

    echo " Barang : $item[nama_barang]<br>";
    echo " Harga : $item[harga_barang]<br>";
    echo " Jumblah : $item[jumblah_barang]<br>";
    echo " Total : $total_barang<br>";
    echo "<br>";
}

echo "Yang Beni harus bayar: $total_pembayaran";
?>
