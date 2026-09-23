<form action="{{ route('siswa.update', $siswa->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="nama" VALUE="{{ old('nama', $siswa->nama) }}" placeholder="Nama Siswa" name="nama" required>
    <input type="text" id="alamat" VALUE="{{ old('alamat', $siswa->alamat) }}" placeholder="Alamat Siswa" name="alamat" required>
    <input type="number" id="kelas" VALUE="{{ old('kelas', $siswa->kelas) }}" placeholder="Kelas Siswa" name="kelas" required>
    <input type="text" id="jurusan" VALUE="{{ old('jurusan', $siswa->jurusan) }}" placeholder="Jurusan Siswa" name="jurusan" required>
    <input type="number" id="no_absen" VALUE="{{ old('no_absen', $siswa->no_absen) }}" placeholder="No Absen Siswa" name="no_absen" required>
    <input type="submit" value="Update Siswa">