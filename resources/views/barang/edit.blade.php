<form action="{{ route('barang.update', $barang->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="nama" VALUE="{{ old('nama', $barang->nama) }}" placeholder="Nama Barang" name="nama" required>
    <input type="number" id="harga" VALUE="{{ old('harga', $barang->harga) }}" placeholder="Harga Barang" name="harga" min="0" required>
    <input type="number" id="stok" VALUE="{{ old('stok', $barang->stok) }}" placeholder="Stok Barang" name="stok" min="0" required>
    <input type="submit" value="Update Barang">

</form>