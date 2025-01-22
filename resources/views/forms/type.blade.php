<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('admin.type') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @if (session('type-message'))
    <span class="text-sm text-orange-700 font-bold">{{ session('type-message') }}</span>
  @endif
    <div class="flex flex-col gap-1">
      <label for="type" class="text-gray-400 font-bold">Type of car</label>
      <input type="text" name="type" id="type" placeholder="Enter car type"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('type')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Create new type</button>
  </form>
</div>