@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Edit model')

@section('content')
<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('admin.editModel', $model->id) }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @method('PUT')
    
    <div class="flex flex-col gap-1">
      <label for="name" class="text-gray-400 font-bold">Model</label>
      <input type="text" name="name" id="name"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        value="{{ $model->name }}">
      @error('name')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <div class="flex flex-col gap-1">
      <label for="maker" class="text-gray-400 font-bold">Maker</label>
      <select name="maker" id="maker"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
        <option value="{{ $model->maker->id }}">{{ $model->maker->name }}</option>
        @foreach ($makers as $maker)
      <option value="{{ $maker->id }}">{{ $maker->name }}</option>
    @endforeach
      </select>
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Update model</button>
  </form>
</div>
@endsection