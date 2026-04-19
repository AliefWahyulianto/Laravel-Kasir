<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach($produk as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_produk }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>