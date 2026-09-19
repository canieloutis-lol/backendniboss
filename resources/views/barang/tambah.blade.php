<form action="{{ route('barang.kirim')}}" method="POST">
    @csrf
    <input type="text" id="nama" placeholder="Nama Barang" name="nama" required>
    <input type="number" id="harga" placeholder="Harga Barang" name="harga" min="0" required>
    <input type="number" id="stok" placeholder="Stok Barang" name="stok" min="0" required>
    <input type="submit" value="Tambah Barang">

</form>