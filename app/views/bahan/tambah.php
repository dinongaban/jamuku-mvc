<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bahan</title>
</head>
<body>
<h2>Tambah Bahan</h2>
<form method="POST" action="?route=bahan/tambah">
    <p>
        <label>Nama:</label><br>
        <input type="text" name="nama" required>
    </p>
    <p>
        <label>Harga:</label><br>
        <input type="number" name="harga" required>
    </p>
    <p>
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required></textarea>
    </p>
    <p>
        <label>Jenis:</label><br>
        <input type="text" name="jenis" required>
    </p>
    <p>
        <button type="submit">Simpan</button>
        <a href="?route=bahan/index">Batal</a>
    </p>
</form>
</body>
</html>
