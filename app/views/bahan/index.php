<h2>Data Bahan</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stok</th>
    </tr>
    <?php foreach ($data['bahan'] as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['stok']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
