<a href="{{ route('home') }}"
  class="max-md:hidden {{ request()->routeIs('home') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Home
</a>
<a href=""
  class="max-md:hidden {{ request()->routeIs('') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Sell your car
</a>
<a href="{{ route('register') }}"
  class="max-md:hidden {{ request()->routeIs('register') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Signup
</a>
<a href="{{ route('login') }}"
  class="max-md:hidden {{ request()->routeIs('login') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Login
</a>