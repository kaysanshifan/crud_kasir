<h1>Daftar Barang</h1>
<a href="/barang/create">Tambah Barang</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['nama'] ?></td>
        <td><?= $item['harga'] ?></td>
        <td><?= $item['stok'] ?></td>
        <td>
            <a href="/barang/edit/<?= $item['id'] ?>">Edit</a>
            <form action="/barang/delete/<?= $item['id'] ?>" method="post" style="display:inline;">
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
