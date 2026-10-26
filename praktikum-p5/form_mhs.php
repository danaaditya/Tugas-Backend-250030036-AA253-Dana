<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Form Input Mahasiswa</h2>
    <form action="proses_mhs.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Nilai:</label><br>
        <input type="number" name="nilai"><br><br>

        <label>Program Studi:</label><br>
        <select name="prodi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>