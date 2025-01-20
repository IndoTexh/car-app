@extends('layouts.app')

@section('bg-color', 'bg-gray-200')
@section('title', 'Login')
    
@section('content')
<form action="{{ route('login') }}" method="POST" class="max-w-sm mx-auto flex flex-col gap-4 mt-10">
  @csrf
  @if (session('status'))
  <h1 class="text-center text-lg font-bold text-gray-700">{{ session('status') }}</h1>
  @endif
  <h1 class="text-center text-4xl font-bold text-gray-700">Login</h1>
  <input type="email" name="email" placeholder="Email" class="px-2 py-2 rounded-md focus:outline-none">
  @error('email')
  <span class="text-sm text-red-500">{{ $message }}</span>
@enderror
  <input type="password" name="password" placeholder="Password" class="px-2 py-2 rounded-md focus:outline-none">
  <button class="bg-orange-700 text-white px-2 py-2 rounded-full">Register</button>
  <div class="flex items-center justify-between">
    <div class="flex items-center gap-2">
      <label for="remember">Remember me</label>
      <input type="checkbox" name="remember" id="remember">
    </div>
    <a href="{{ route('password.request') }}" class="text-orange-700 underline">Forgot password</a>
  </div>
  <div class="grid grid-cols-2 gap-4">
    <button class="bg-white shadow-lg px-2 py-2 rounded-md">Google</button>
    <button class="bg-white shadow-lg px-2 py-2 rounded-md">Facebook</button>
  </div>
  <div class="flex items-center justify-center">
    <p class="text-gray-700">Don't have an account yet?</p>&nbsp - &nbsp
    <a href="{{ route('register') }}" class="text-orange-700">Click here to signup</a>
  </div>
</form>
@endsection

