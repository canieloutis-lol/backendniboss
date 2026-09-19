
<table border="1">
    <head>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
    </head>
    
        @foreach ($barang as $b)
        <tr>
            <td>{{ $b['nama'] }}</td>
            <td>{{ $b['harga'] }}</td>
            <td>{{ $b['stok'] }}</td>
            <td>
                <a href="{{ route('barang.edit', $b->id) }}">Update</a>
                <a href="{{ route('barang.delete', $b->id) }}">Delete</a>
                
            </td>
        </tr>
        @endforeach
</table>
<a href="{{ route('barang.tambah') }}">Add Barang</a>