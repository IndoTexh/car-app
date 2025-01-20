@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Forgot Password')

@section('content')
<form action="{{ route('password.email') }}" method="POST" class="max-w-sm mx-auto flex flex-col gap-4 mt-10">
  @csrf
  @if (session('status'))
    <h1 class="text-center text-lg font-bold text-gray-700">{{ session('status') }}</h1>
  @endif
  <input type="email" name="email" placeholder="Email" class="px-2 py-2 rounded-md focus:outline-none">
  @error('email')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <button class="bg-orange-700 text-white px-2 py-2 rounded-full">Request</button>
</form>
@endsection