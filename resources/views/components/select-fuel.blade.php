@props(['fuels', 'name'])
<select name="fuel" class="border-2 py-2 px-2 rounded-md">
  <option>{{ $name }}</option>
  @foreach ($fuels as $fuel)
    <option value="{{ $fuel->id }}">{{ $fuel->fuel }}</option>
  @endforeach
</select>