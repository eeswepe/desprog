<?php

$nilaiSiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$totalNilai = array_sum($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);

$rataRata = $totalNilai / $jumlahSiswa;

echo "Siswa dengan nilai di atas rata-rata ({$rataRata}): <br>";

foreach ($nilaiSiswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "- " . $nama . ": " . $nilai . "<br>";
    }
}

?>