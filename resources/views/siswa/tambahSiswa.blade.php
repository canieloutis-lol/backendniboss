<form action="{{route('siswa.tambah') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama Siswa" required>
    <input type="text" name="alamat" placeholder="Alamat Siswa" required>
    <input type="number" name="kelas" placeholder="Kelas Siswa" required>
    <input type="text" name="jurusan" placeholder="Jurusan Siswa" required>
    <input type="number" name="no_absen" placeholder="No Absen Siswa" required>
    <input type="submit" value="Tambah Siswa">
</form>