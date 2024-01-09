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
