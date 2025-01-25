@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Fuel list')

@section('content')
<div class="max-w-screen-md mx-auto bg-white shadow-lg rounded-lg mt-5 p-10 space-y-2">
  @if (session('update-message'))
    <span class="text-sm text-orange-700 font-bold">{{ session('update-message') }}</span>
  @endif
  <table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
      <tr class="bg-gray-100">
        <th class="border border-gray-300 px-4 py-1 text-left">ID</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Fuel</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Created at</th>
        <th class="border border-gray-300 px-4 py-1 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fuels as $fuel)    
      <tr>
      <td class="border border-gray-300 px-4 py-1">{{ $fuel->id }}</td>
      <td class="border border-gray-300 px-4 py-1">{{ $fuel->fuel }}</td>
      <td class="border border-gray-300 px-4 py-1">{{ $fuel->created_at->format('F j, Y') }}</td>
      <td class="border border-gray-300 px-4 py-1 flex items-center gap-2">
        <a href="{{ route('admin.editFuel', $fuel->id) }}"
        class="bg-orange-700 text-white px-4 py-1 rounded hover:bg-orange-500">
        Edit
        </a>
        <a class="bg-red-700 text-white px-4 py-1 rounded hover:bg-red-500">
        <form action="{{ route('admin.deleteFuel', $fuel->id) }}" method="POST" onsubmit="return confirmDelete()">
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
</div>

<script>
  function confirmDelete() {
    return confirm('Are you sure want to delete this car fuel?');
  }
</script>

@endsection