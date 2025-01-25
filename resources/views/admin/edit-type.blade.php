@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Update type')

@section('content')
<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('admin.editType', $type->id) }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @method('PUT')
    <div class="flex flex-col gap-1">
      <label for="type" class="text-gray-400 font-bold">Type</label>
      <input type="text" name="type" id="type"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        value="{{ $type->type }}">
      @error('type')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Update type</button>
  </form>
</div>
@endsection