<form action="{{ route('buku.update', $buku->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="judul" VALUE="{{ old('judul', $buku->judul) }}" placeholder="Judul Buku" name="judul" required>
    <input type="text" id="penulis" VALUE="{{ old('penulis', $buku->penulis) }}" placeholder="Penulis Buku" name="penulis" required>
    <input type="text" id="tahun_terbit" VALUE="{{ old('tahun_terbit', $buku->tahun_terbit) }}" placeholder="Tahun Terbit" name="tahun_terbit" required>
    <input type="text" id="stok" VALUE="{{ old('stok', $buku->stok) }}" placeholder="Stok Buku" name="stok" required>
    <input type="submit" value="Update Buku">

</form>