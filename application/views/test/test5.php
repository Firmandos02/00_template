<?php
// Mendapatkan tahun saat ini
$tahunSekarang = date('Y');

// Mendapatkan 5 tahun ke belakang dan 5 tahun ke depan
$tahunKebelakang = $tahunSekarang - 5;
$tahunKedepan = $tahunSekarang + 5;

// Membuat array tahun
$arrayTahun = range($tahunKebelakang, $tahunKedepan);

// Menampilkan array tahun
echo "Array Tahun: ";
print_r($arrayTahun);


// Mendapatkan tahun saat ini
$tahunSekarang = date('Y');

// Membuat array bulan dengan nomor dan nama bulan
$arrayBulan = [];
for ($bulan = 1; $bulan <= 12; $bulan++) {
	$namaBulan = date("F", mktime(0, 0, 0, $bulan, 1, $tahunSekarang));
	$arrayBulan[$bulan] = $namaBulan;
}

// Menampilkan array bulan
echo "Array Bulan Tahun $tahunSekarang: ";
print_r($arrayBulan);
// Menampilkan nama bulan dari array
foreach ($arrayBulan as $nomorBulan => $namaBulan) {
	echo "Bulan ke-$nomorBulan: $namaBulan<br>";
}
