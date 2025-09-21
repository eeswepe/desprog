<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah\n <br>";
echo "Hasil Pengurangan: $hasilKurang\n <br>";
echo "Hasil Perkalian: $hasilKali\n <br>";
echo "Hasil Pembagian: $hasilBagi\n <br>";
echo "Sisa Hasil Bagi: $sisaBagi\n <br>";
echo "Hasil Pangkat: $pangkat\n <br>";

echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama Dengan: $hasilSama\n <br>";
echo "Hasil Tidak Sama Dengan: $hasilTidakSama\n <br>";
echo "Hasil Lebih Kecil Dari: $hasilLebihKecil\n <br>";
echo "Hasil Lebih Besar Dari: $hasilLebihBesar\n <br>";
echo "Hasil Lebih Kecil Sama Dengan: $hasilLebihKecilSama\n <br>";
echo "Hasil Lebih Besar Sama Dengan: $hasilLebihBesarSama\n <br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: $hasilAnd\n <br>";
echo "Hasil OR: $hasilOr\n <br>";
echo "Hasil NOT A: $hasilNotA\n <br>";
echo "Hasil NOT B: $hasilNotB\n <br>";

echo "<br><br>";

$a += $b;
echo "Hasil a += b: $a\n <br>";
$a -= $b;
echo "Hasil a -= b: $a\n <br>";
$a *= $b;
echo "Hasil a *= b: $a\n <br>";
$a /= $b;
echo "Hasil a /= b: $a\n <br>";
$a %= $b;
echo "Hasil a %= b: $a\n <br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilIdentik\n <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik\n <br>";