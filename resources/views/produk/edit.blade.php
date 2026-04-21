<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="/produk/{{$produk->id}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk</label>
        <input type="text" name="nama_produk" value="{{$produk->nama_produk}}">

        <br><br>

        <label">Harga</label>
        <input type="number" name="harga" value="{{$produk->harga}}">

        <br><br>
        
        <label">Stok</label>
        <input type="number" name="stok" value="{{$produk->stok}}">

        <br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>