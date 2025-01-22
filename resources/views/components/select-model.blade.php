@props(['models', 'name'])
<select name="model" id="model" class="border-2 py-2 px-2 rounded-md">
  <option>{{ $name }}</option>
  @foreach ($models as $model)
    <option value="{{ $model->id }}">{{ $model->name }}</option>
  @endforeach
</select>