<nav style="background-image: url({{ asset("/storage/bg-2.webp") }})"
  class="h-screen bg-cover bg-center bg-black w-full bg-no-repeat">
  <div class="flex items-center justify-between px-20 py-5">

    <div>
      <h1 class="text-white text-4xl font-bold">Laragarage</h1>
    </div>

    <ul class="flex items-center gap-10 text-white text-lg">
      <li>
        <a href="{{ route('home') }}"
          class="{{ request()->routeIs('home') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">Home</a>
      </li>
      @auth
      <li>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">
        Logout
        <button>
      </form>
      @endauth

      @guest
        <li>
        <a href="{{ route('register') }}"
          class="{{ request()->routeIs('register') ? 'px-4 border-2 border-white py-1 rounded-md' : '' }}">
          Register
        </a>
        </li>
        <li>
        <a href="{{ route('login') }}">Login</a>
        </li>
      @endguest
    </ul>

  </div>
</nav>