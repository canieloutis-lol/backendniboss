<table border="1">
    <head>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
    </head>
    
        @foreach ($buku as $b)
        <tr>
            <td>{{ $b['id'] }}</td>
            <td>{{ $b['judul'] }}</td>
            <td>{{ $b['penulis'] }}</td>
            <td>{{ $b['tahun_terbit'] }}</td>
            <td>{{ $b['stok'] }}</td>
            <td>
                <a href="{{ route('buku.edit', $b->id) }}">Update</a>
                <a href="{{ route('buku.delete', $b->id) }}">Delete</a>
                
            </td>

        </tr>
        <a href="{{ route('buku.tambah') }}">Add Buku</a>
        @endforeach