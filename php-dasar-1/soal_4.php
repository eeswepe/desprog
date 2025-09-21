<?php

$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

sort($daftarNilai);

for($i = 2; $i < (count($daftarNilai)-2); $i++) {
    $totalNilai += $daftarNilai[$i];
}

echo $totalNilai;