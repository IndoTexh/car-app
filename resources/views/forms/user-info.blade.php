<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('updateInfo') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @if (session(''))
    <span class="text-sm text-orange-700 font-bold">{{ session('') }}</span>
  @endif
    <div class="flex flex-col gap-1">
      <label for="first_name" class="text-gray-400 font-bold">First Name</label>
      <input type="text" name="first_name" id="first_name" value="{{ auth()->user()->first_name }}"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('first_name')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>
    <div class="flex flex-col gap-1">
      <label for="last_name" class="text-gray-400 font-bold">Last Name</label>
      <input type="text" name="last_name" id="last_name" value="{{ auth()->user()->last_name }}"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('last_name')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>
    <div class="flex flex-col gap-1">
      <label for="email" class="text-gray-400 font-bold">Email</label>
      <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('email')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>
    <div class="flex flex-col gap-1">
      <label for="phone" class="text-gray-400 font-bold">Email</label>
      <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('phone')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Update</button>
  </form>
</div>