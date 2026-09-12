@extends('layout')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Tugas</h1>

<form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white p-6 rounded-xl shadow space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
        <input type="text" name="title" value="{{ old('title', $task->title) }}"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <textarea name="description" rows="3"
                  class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
    </div>

    <label class="flex items-center gap-2">
        <input type="checkbox" name="is_done" value="1" {{ $task->is_done ? 'checked' : '' }}>
        <span class="text-sm text-gray-700">Selesai</span>
    </label>

    <div class="flex justify-end gap-2">
        <a href="{{ route('tasks.index') }}" class="px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100">Batal</a>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Update</button>
    </div>
</form>
@endsection