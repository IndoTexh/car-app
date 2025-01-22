@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Email Verification')

@section('content')
<div class="bg-white shadow-lg max-w-sm mx-auto rounded-md text-orange-700 font-bold p-5 mt-10">
  <p class="text-sm">
    {{ $mailmessage }}
  </p>
  <p>{{ $subject }}</p>
</div>
@endsection