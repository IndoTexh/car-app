@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Edit maker')

@section('content')
<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('admin.editMaker', $maker->id) }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @method('PUT')
    <div class="flex flex-col gap-1">
      <label for="name" class="text-gray-400 font-bold">Maker</label>
      <input type="text" name="name" id="name"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        value="{{ $maker->name }}">
      @error('name')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Update maker</button>
  </form>
</div>
@endsection