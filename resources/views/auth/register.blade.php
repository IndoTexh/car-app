<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Register</title>
</head>

<body class="bg-gray-200">
  <nav class="bg-orange-700">
    <div class="flex items-center justify-between px-20 py-5">
      <div>
        <h1 class="text-white text-4xl font-bold">Laragarage</h1>
      </div>
      <ul class="flex items-center gap-10 text-white text-lg">
        <li>
          <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
            Home
          </a>
        </li>
        <li>
          <a href="{{ route('register') }}"
            class="{{ request()->routeIs('register') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
            Register
          </a>
        </li>
        <li>
          <a href="{{ route('login') }}"
            class="{{ request()->routeIs('login') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
            Login
          </a>
        </li>
      </ul>
    </div>
  </nav>

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

</body>

</html>