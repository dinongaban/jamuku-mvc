<h2>Pilih Bahan Jamu</h2>
<form method="POST" action="?route=home/tambahKeranjang">
    <label>Bahan:</label>
    <select name="bahan_id" required>
        <?php foreach ($data['bahan'] as $b): ?>
            <option value="<?= $b['id']; ?>">
                <?= $b['nama']; ?> (<?= $b['jenis']; ?>) - Rp<?= number_format($b['harga'],0,',','.'); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Porsi:</label>
    <input type="number" name="porsi" value="1" min="1" required>

    <button type="submit">Tambah ke Keranjang</button>
</form>

<h3>Keranjang Belanja</h3>
<?php if (!empty($data['keranjang'])): ?>
    <table border="1" cellpadding="5">
        <tr>
            <th>Bahan</th>
            <th>Harga</th>
            <th>Porsi</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data['keranjang'] as $i => $item): ?>
            <tr>
                <td><?= $item['nama']; ?></td>
                <td>Rp<?= number_format($item['harga'],0,',','.'); ?></td>
                <td><?= $item['porsi']; ?></td>
                <td>Rp<?= number_format($item['total'],0,',','.'); ?></td>
                <td><a href="?route=home/hapusKeranjang/<?= $i; ?>">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>Keranjang kosong.</p>
<?php endif; ?>
