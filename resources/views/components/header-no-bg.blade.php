<nav class="bg-orange-700">
  <div class="flex items-center justify-between px-20 max-md:px-10 py-5">
    <div>
      <h1 class="text-white text-4xl font-bold">Laragarage</h1>
    </div>
    <ul class="flex items-center gap-10 text-white">
      <li>
        <a href="{{ route('home') }}"
          class="max-md:hidden {{ request()->routeIs('home') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
          Home
        </a>
      </li>

      @auth
      <li class="group relative cursor-pointer">
      <div class="flex items-center px-6 border-2 py-1 border-white rounded-md">
        <a class="menu-hover text-white mx-4">
        Menu
        </a>
        <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
        </span>
      </div>

      <ul
        class="invisible absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible rounded-md">

        <a href="{{ route('dashboard') }}"
        class="border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2 ">
        Dashboard
        </a>
        <a href="{{ route('home') }}"
        class="hidden max-md:block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2 ">
        Home
        </a>
        <a href="" class="block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2">
        Add cars
        </a>

        <a class="block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2">
        My cars
        </a>

        <a class="block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2">
        Favorite
        </a>


        <form action="{{ route('logout') }}" method="POST"
        class="block border-b border-gray-100 py-1  text-gray-500 hover:text-black md:mx-2">
        @csrf
        <button>Logout</button>
        </form>
      </ul>
      </li>
    @endauth

      @guest
      <li class="max-md:hidden">
      <a href="{{ route('register') }}"
        class="{{ request()->routeIs('register') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
        Register
      </a>
      </li>
      <li class="max-md:hidden">
      <a href="{{ route('login') }}"
        class="{{ request()->routeIs('login') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
        Login
      </a>
      </li>

      <li class="hidden group relative cursor-pointer max-md:block">
      <div class="flex items-center px-6 border-2 py-1 border-white rounded-md">
        <a class="menu-hover text-white mx-4">
        Menu
        </a>
        <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
        </span>
      </div>

      <ul
        class="invisible absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-4 text-gray-800 shadow-xl group-hover:visible rounded-md">

        <a href="{{ route('home') }}"
        class="hidden max-md:block border-b border-gray-100 py-1  text-orange-700 hover:text-orange-500 md:mx-2 ">
        Home
        </a>
        <a href="{{ route('register') }}"
        class="border-b border-gray-100 py-1  text-orange-700 hover:text-orange-500 md:mx-2 ">
        Signup
        </a>
        <a href="{{ route('login') }}"
        class="hidden max-md:block border-b border-gray-100 py-1  text-orange-700 hover:text-orange-500 md:mx-2 ">
        Login
        </a>
      </ul>
      </li>
    @endguest
    </ul>

  </div>
</nav>