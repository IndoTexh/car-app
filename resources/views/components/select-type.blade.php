@props(['types', 'name'])
<select name="type" class="border-2 py-2 px-2 rounded-md">
  <option>Type</option>
  @foreach ($types as $type)
    <option value="{{ $type->id }}">{{ $type->type }}</option>
  @endforeach
</select>