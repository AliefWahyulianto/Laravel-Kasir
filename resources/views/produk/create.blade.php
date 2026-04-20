<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="/produk/store" method="POST">
        @csrf

        <label>Nama Produk</label>
        <input type="text" name="nama_produk">

        <br><br>

        <label>Harga</label>
        <input type="number" name=harga>

        <br><br>

        <label>Stok</label>
        <input type="number" name="stok">

        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>