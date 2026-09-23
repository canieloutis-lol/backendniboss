@extends('layout.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-white">Daftar Siswa</h1>

<table class="min-w-full bg-gray-900 border border-gray-700 rounded-lg shadow">
    <thead class="bg-gray-800">
        <tr>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">ID</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">Nama</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">Alamat</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">Kelas</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">Jurusan</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">No Absen</th>
            <th class="py-2 px-4 border-b border-gray-700 text-left text-white">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr class="hover:bg-gray-700">
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->id }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->nama }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->alamat }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->kelas }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->jurusan }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $s->no_absen }}</td>
            <td class="py-2 px-4 border-b border-gray-700">
                <a href="{{ route('siswa.edit', $s->id) }}" 
                   class="inline-block bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-600">
                    Edit
                </a>
                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    <a href="{{ route('siswa.tambah') }}" 
       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Tambah Siswa
    </a>
</div>
@endsection