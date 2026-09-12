@extends('layout')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Daftar Tugas</h1>
    <a href="{{ route('tasks.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Tambah Tugas
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow divide-y">
    @forelse ($tasks as $task)
        <div class="flex justify-between items-center p-4">
            <div>
                <h2 class="font-semibold text-gray-800 {{ $task->is_done ? 'line-through text-gray-400' : '' }}">
                    {{ $task->title }}
                </h2>
                <p class="text-sm text-gray-500">{{ $task->description }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('tasks.edit', $task) }}"
                   class="text-yellow-600 hover:underline text-sm">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                      onsubmit="return confirm('Yakin hapus tugas ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                </form>
            </div>
        </div>
    @empty
        <p class="p-4 text-gray-500 text-center">Belum ada tugas.</p>
    @endforelse
</div>
@endsection