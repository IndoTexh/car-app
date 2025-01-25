@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Model list')

@section('content')
<div class="max-w-screen-lg mx-auto bg-white shadow-lg rounded-lg mt-5 p-10 space-y-2">
  @if (session('update-message'))
    <span class="text-sm text-orange-700 font-bold">{{ session('update-message') }}</span>
  @endif
  <table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
      <tr class="bg-gray-100">
        <th class="border border-gray-300 px-4 py-1 text-left">ID</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Maker</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Model</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Created at</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($models as $model)    
      <tr>
      <td class="border border-gray-300 px-4 py-1">{{ $model->id }}</td>
      <td class="border border-gray-300 px-4 py-1">{{ $model->maker->name }}</td>
      <td class="border border-gray-300 px-4 py-1">{{ $model->name }}</td>
      <td class="border border-gray-300 px-4 py-1">{{ $model->created_at->format('F j, Y') }}</td>
      <td class="border border-gray-300 px-4 py-1 flex items-center gap-2">
        <a href="{{ route('admin.editModel', $model->id) }}"
        class="bg-orange-700 text-white px-4 py-1 rounded hover:bg-orange-500">
        Edit
        </a>
        <a class="bg-red-700 text-white px-4 py-1 rounded hover:bg-red-500">
        <form action="{{ route('admin.deleteModel', $model->id) }}" method="POST" onsubmit="return confirmDelete()">
          @csrf
          @method('DELETE')
          <button>Delete</button>
        </form>
        </a>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div>
    {{ $models->links() }}
  </div>
</div>

<script>
  function confirmDelete() {
    return confirm('Are you sure want to delete this car model?');
  }
</script>

@endsection