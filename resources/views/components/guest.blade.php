<a href="{{ route('home') }}"
  class="max-md:hidden {{ request()->routeIs('home') ? 'px-4 border-2  py-1 rounded-md' : '' }}">
  Home
</a>

<li class="group relative cursor-pointer">
  <div class="flex items-center px-6 border-2 py-1 border-white rounded-md">
    <a class="menu-hover text-white mx-4">
      Menu
    </a>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
      </svg>
    </span>
  </div>

  <ul
    class="invisible absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible rounded-md">
    <a href="{{ route('home') }}"
      class="hidden max-md:block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2 ">
      Home
    </a>
    <a href="{{ route('register') }}" class="border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2 ">
      Signup
    </a>
    <a href="{{ route('login') }}" class="block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2">
      Login
    </a>
  </ul>
</li>