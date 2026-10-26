<?php
require_once 'Mahasiswa.php';

// 1. Buat 3 objek Mahasiswa dengan nilai berbeda
$mhs1 = new Mahasiswa("Andi", "22030101");
$mhs1->setNilai(88); // Predikat A

$mhs2 = new Mahasiswa("Budi", "22030102");
$mhs2->setNilai(72); // Predikat B

$mhs3 = new Mahasiswa("Citra", "22030103");
$mhs3->setNilai(58); // Predikat C

$daftar_mhs = [$mhs1, $mhs2, $mhs3];

// 2. Ambil input predikat dari query string URL (?predikat=...)
$predikat_cari = $_GET['predikat'] ?? '';
$ditemukan = false;

echo "<h3>Hasil Filter untuk Predikat: " . htmlspecialchars($predikat_cari) . "</h3>";

// 3. Tampilkan mahasiswa yang sesuai
foreach ($daftar_mhs as $mhs) {
    if ($mhs->getPredikat() === $predikat_cari) {
        echo "Nama: " . htmlspecialchars($mhs->nama) . " (" . $mhs->getNilai() . ") - " . $mhs->getPredikat() . "<br>";
        $ditemukan = true;
    }
}

// 4. Jika tidak ada yang cocok
if (!$ditemukan && $predikat_cari !== '') {
    echo "Tidak ada data";
}
?>