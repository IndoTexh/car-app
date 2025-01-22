@props(['makers', 'name'])
<select name="maker" id="maker" class="border-2 py-2 px-2 rounded-md">
  <option>{{ $name }}</option>
  @foreach ($makers as $maker)
    <option value="{{ $maker->id }}">{{ $maker->name }}</option>
  @endforeach
</select>