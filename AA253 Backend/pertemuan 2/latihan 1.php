<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Masukkan nilai:
    <input type="number" name="nilai" required>
    <button type="submit">Cek Nilai</button>
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilai = (int) $_POST['nilai'];

    if ($nilai >= 90) {
        echo "A";
    } elseif ($nilai >= 80) {
        echo "B";
    } elseif ($nilai >= 70) {
        echo "C";
    } else {
        echo "D";
    }
}
?>

</body>
</html>