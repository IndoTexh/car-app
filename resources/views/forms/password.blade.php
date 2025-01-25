<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('updatePassword') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @method('PUT')
    @if (session(''))
    <span class="text-sm text-orange-700 font-bold">{{ session('') }}</span>
  @endif
    <div class="flex flex-col gap-1">
      <label for="current_password" class="text-gray-400 font-bold">Current Password</label>
      <input type="password" name="current_password" id="current_password"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        placeholder="Current Password">
      @error('current_password')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <div class="flex flex-col gap-1">
      <label for="password" class="text-gray-400 font-bold">New Password</label>
      <input type="password" name="password" id="password"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        placeholder="New Password">
      @error('password')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <div class="flex flex-col gap-1">
      <label for="password_confirmation" class="text-gray-400 font-bold">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none"
        placeholder="Confirm Password">
    </div>

    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Update Password</button>
  </form>
</div>