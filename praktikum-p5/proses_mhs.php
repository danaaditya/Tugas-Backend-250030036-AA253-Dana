<?php
require_once 'Mahasiswa.php';

$nama  = trim($_POST['nama'] ?? '');
$nim   = trim($_POST['nim'] ?? '');
$nilai = trim($_POST['nilai'] ?? '');
$prodi = $_POST['prodi'] ?? '';

$e = [];
$mhs = new Mahasiswa($nama, $nim);

// Validasi Server
if ($nama === '') {
    $e[] = 'Nama wajib diisi';
}
if (!ctype_digit($nim)) {
    $e[] = 'NIM harus angka';
}
if (!is_numeric($nilai) || !$mhs->setNilai((float)$nilai)) {
    $e[] = 'Nilai ' . htmlspecialchars($nilai) . ' tidak valid! (Harus angka 0-100)';
}
if (!in_array($prodi, ['SI', 'TI'], true)) {
    $e[] = 'Prodi tidak valid';
}

// Tampilkan Error atau Hasil
if (!empty($e)) {
    foreach ($e as $pesan) {
        echo "<span style='color:red;'>$pesan</span><br>";
    }
} else {
    echo "Nama: " . htmlspecialchars($mhs->nama) . "<br>";
    echo "NIM: " . htmlspecialchars($mhs->nim) . "<br>";
    echo "Nilai: " . $mhs->getNilai() . "<br>";
    echo "Predikat: " . $mhs->getPredikat() . "<br>";
    echo "Prodi: " . htmlspecialchars($prodi) . "<br>";
}
?>