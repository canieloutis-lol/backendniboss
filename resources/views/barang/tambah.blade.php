@error('stok')
<h1>Error!</h1>
<h1>{{ $message }}</h1>
@enderror

<form action="{{ route('barang.kirim')}}" method="POST">
    @csrf
    <input type="text" id="nama" placeholder="Nama Barang" name="nama" required>
    <input type="text" id="harga" placeholder="Harga Barang" name="harga" min="0" required>
    <input type="text" id="stok" placeholder="Stok Barang" name="stok" min="0" required>
    <input type="submit" value="Tambah Barang">

</form>