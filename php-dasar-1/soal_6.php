<?php

$poinPemain = 620;

$dapatHadiah = ($poinPemain > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . $poinPemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $dapatHadiah;
