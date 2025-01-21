<div class="max-w-screen-md mx-auto bg-white shadow-lg p-10 rounded-lg mt-5">
  <form action="{{ route('admin.model') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    @if (session('model-message'))
    <span class="text-sm text-orange-700 font-bold">{{ session('model-message') }}</span>
  @endif

    <div class="flex flex-col gap-1">
      <label for="name" class="text-gray-400 font-bold">Select a maker</label>
      <select name="maker" id="maker"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
        @foreach ($makers as $maker)
      <option value="{{ $maker->id }}">{{ $maker->name }}</option>
    @endforeach
      </select>
      @error('name')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>

    <div class="flex flex-col gap-1">
      <label for="model" class="text-gray-400 font-bold">Model</label>
      <input type="text" name="model" id="model" placeholder="Enter model name"
        class="px-4 py-2 rounded-md border-2 border-gray-400 text-gray-400 placeholder:text-gray-400 focus:outline-none">
      @error('model')
      <span class="text-sm text-red-700">{{ $message }}</span>
    @enderror
    </div>



    <button class="px-4 py-2 bg-orange-700 text-white rounded-md w-1/4">Create new model</button>
  </form>
</div>