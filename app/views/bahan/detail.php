<!DOCTYPE html>
<html>
<head>
    <title>Detail Bahan</title>
</head>
<body>
<h2>Detail Bahan</h2>
<?php if (!empty($bahan)): ?>
    <p><strong>Nama:</strong> <?= htmlspecialchars($bahan['nama']) ?></p>
    <p><strong>Harga:</strong> Rp <?= number_format($bahan['harga'], 0, ',', '.') ?></p>
    <p><strong>Deskripsi:</strong> <?= nl2br(htmlspecialchars($bahan['deskripsi'])) ?></p>
    <p><strong>Jenis:</strong> <?= htmlspecialchars($bahan['jenis']) ?></p>
<?php else: ?>
    <p>Bahan tidak ditemukan.</p>
<?php endif; ?>
<p><a href="?route=bahan/index">Kembali</a></p>
</body>
</html>
