<h1>Edit Barang</h1>
<form action="/barang/update/<?= $barang['id'] ?>" method="post">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= $barang['nama'] ?>">
    <br>
    <label>Harga:</label>
    <input type="number" name="harga" value="<?= $barang['harga'] ?>">
    <br>
    <label>Stok:</label>
    <input type="number" name="stok" value="<?= $barang['stok'] ?>">
    <br>
    <button type="submit">Update</button>
</form>
