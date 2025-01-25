@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Admin')

@section('content')
<div class="py-5">
  <x-header-text>Create cars information</x-header-text>
  @include('forms.maker')
  @include('forms.model')
  @include('forms.type')
  @include('forms.fuel')
</div>
@endsection