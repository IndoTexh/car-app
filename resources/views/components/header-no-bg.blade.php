<nav class="bg-orange-700">
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