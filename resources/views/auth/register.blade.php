@extends('layouts.app')

@section('bg-color', 'bg-gray-200')
@section('title', 'Register')

@section('content')
<form action="{{ route('register') }}" method="POST" class="max-w-sm mx-auto flex flex-col gap-4 mt-10">
  @csrf
  <h1 class="text-center text-4xl font-bold text-gray-700">Signup</h1>
  <input type="text" name="first_name" placeholder="First Name" class="px-2 py-2 rounded-md focus:outline-none">
  @error('first_name')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <input type="text" name="last_name" placeholder="Last Name" class="px-2 py-2 rounded-md focus:outline-none">
  @error('last_name')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <input type="email" name="email" placeholder="Email" class="px-2 py-2 rounded-md focus:outline-none">
  @error('email')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <input type="password" name="password" placeholder="Password" class="px-2 py-2 rounded-md focus:outline-none">
  @error('password')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <input type="password" name="password_confirmation" placeholder="Password Confirmation"
    class="px-2 py-2 rounded-md focus:outline-none">
  <input type="text" name="phone" placeholder="Phone" class="px-2 py-2 rounded-md focus:outline-none">
  @error('phone')
    <span class="text-sm text-red-500">{{ $message }}</span>
  @enderror
  <button class="bg-orange-700 text-white px-2 py-2 rounded-full">Register</button>
  <div class="grid grid-cols-2 gap-4">
    <button class="bg-white shadow-lg px-2 py-2 rounded-md">Google</button>
    <button class="bg-white shadow-lg px-2 py-2 rounded-md">Facebook</button>
  </div>
  <div class="flex items-center justify-center">
    <p class="text-gray-700">Already have an account?</p>&nbsp - &nbsp
    <a href="{{ route('login') }}" class="text-orange-700">Click here to login</a>
  </div>
</form>
@endsection