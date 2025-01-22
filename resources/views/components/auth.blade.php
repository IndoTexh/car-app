<a href="{{ route('home') }}"
  class=" max-md:hidden {{ request()->routeIs('home') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Home
</a>

<x-auth-mobile-menu />