<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <title>@yield('title') </title>
</head>

<body class="@yield('bg-color')">
    @if (Route::currentRouteName() === 'home')
        <x-header></x-header>
    @else
        <x-header-no-bg></x-header-no-bg>
    @endif

    @yield('content')

    <x-footer></x-footer>
</body>

</html>