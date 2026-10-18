<?php
function hitungLuasLingkaran($jari){
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari = 7;

echo "Luas Lingkaran dengan jari jari $jari adalah " . hitungLuasLingkaran($jari) . "<br>";
?>