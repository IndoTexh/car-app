<nav style="background-image: url({{ asset("/storage/bg-2.webp") }})"
  class="h-screen bg-cover bg-center bg-black w-full bg-no-repeat">
  <div class="flex items-center justify-between px-20 max-md:px-5 py-5">
    <div>
      <h1 class="text-white text-4xl font-bold">Laragarage</h1>
    </div>

    <ul class="flex items-center gap-10 text-white">
    @auth
      <x-auth />
    @endauth

    @guest
      <x-guest />
    @endguest
    </ul>
  </div>
</nav>