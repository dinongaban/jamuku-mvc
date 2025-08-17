<!DOCTYPE html>
<html>
<head>
    <title>Edit Bahan</title>
</head>
<body>
<h2>Edit Bahan</h2>
<?php if (!empty($bahan)): ?>
<form method="POST" action="?route=bahan/edit&id=<?= $bahan['id'] ?>">
    <p>
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($bahan['nama']) ?>" required>
    </p>
    <p>
        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?= htmlspecialchars($bahan['harga']) ?>" required>
    </p>
    <p>
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required><?= htmlspecialchars($bahan['deskripsi']) ?></textarea>
    </p>
    <p>
        <label>Jenis:</label><br>
        <input type="text" name="jenis" value="<?= htmlspecialchars($bahan['jenis']) ?>" required>
    </p>
    <p>
        <button type="submit">Update</button>
        <a href="?route=bahan/index">Batal</a>
    </p>
</form>
<?php else: ?>
    <p>Bahan tidak ditemukan.</p>
<?php endif; ?>
</body>
</html>
