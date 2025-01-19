<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Reset Password</title>
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
  <div class="bg-orange-700 max-w-sm mx-auto rounded-md text-white p-5 mt-10">
    <p>
      We have emailed a link for email verification. Click the link it will redirect you to your respective dashboard.
      If you have not received an email verification we gladly send you another one by clicking the button below.
    </p>
    <button class="bg-white  font-bold text-sm text-orange-700 px-2 py-2 rounded-md mt-2">Resend verification link</button>
  </div>
</body>

</html>