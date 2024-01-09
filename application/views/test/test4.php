<?php
$tahunSekarang = date('Y');

$tahunSekarang = date("Y");
$getbulan = [];

for ($bulan = 1; $bulan <= 12; $bulan++) {
	$namaBulan = date("F", mktime(0, 0, 0, $bulan, 1, $tahunSekarang));
	$angkaBulan = sprintf("%02d", $bulan); // Format angka bulan menjadi dua digit

	$getbulan[$angkaBulan] = $namaBulan;
}

// Contoh penggunaan
foreach ($getbulan as $angkaBulan => $namaBulan) {
	echo "Bulan " . $angkaBulan . ": " . $namaBulan . "<br>";
}
