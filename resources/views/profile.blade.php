@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Dashboard')

@section('content')
<div class="py-5">
  <x-header-text>My Profile</x-header-text>
  @include('forms.user-info')
  @include('forms.password')
</div>
@endsection