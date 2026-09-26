@error('stok')
<h1>Error!</h1>
<h1>{{ $message }}</h1>
@enderror

<form action="{{ route('buku.tambah') }}" method="POST">
    @csrf
    <input type="text" id="judul" placeholder="Judul Buku" name="judul" required>
    <input type="text" id="penulis" placeholder="Penulis Buku" name="penulis" required>
    <input type="text" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun_terbit" required>
    <input type="text" id="stok" placeholder="Stok Buku" name="stok" required>
    <input type="submit" value="Tambah Buku">
</form>