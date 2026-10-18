<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

foreach ($angka as $nilai) {
    if ($nilai % 3 == 0) {
        echo "Nilai : $nilai <br>";
    }
}
?>