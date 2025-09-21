<?php

$total_kursi = 45;
$kursi_terisi = 28;

$persentase_kosong = (($total_kursi - $kursi_terisi) / $total_kursi) * 100;

echo "Total Kursi: {$total_kursi} <br>";
echo "Kursi Terisi: {$kursi_terisi} <br>";
echo "Persentase Kursi Kosong: {$persentase_kosong}% <br>";