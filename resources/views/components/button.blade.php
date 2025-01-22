@props(['bg', 'color'])
<button class="{{ $bg }} px-2 py-2 rounded-md {{ $color }} max-md:order-11">{{ $slot }}</button>