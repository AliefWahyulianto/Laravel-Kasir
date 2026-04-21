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
        <tr>
        @foreach($produk as $item)
            <td>{{$item->id}}</td>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->stok}}</td>
            <td>
                <form action="/produk/{{$item->id}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="/produk/{{$item->id}}/edit">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>