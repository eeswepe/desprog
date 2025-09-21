<?php 

$hargaAwal = 120000;
$syaratDiskon = 100000;
$diskon = 20;

$jumlahDiskon = 0;

if($hargaAwal > $syaratDiskon){
    $jumlahDiskon = ($diskon / 100) * $hargaAwal;
}

$hargaAkhir = $hargaAwal - $jumlahDiskon;

echo "Harga Awal: {$hargaAwal} <br>";
echo "Jumlah Diskon: {$jumlahDiskon} <br>";
echo "Harga Akhir: {$hargaAkhir} <br>";