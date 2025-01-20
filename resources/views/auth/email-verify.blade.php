@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Reset Password')

@section('content')
<div class="bg-white shadow-lg max-w-sm mx-auto rounded-md text-orange-700 font-bold p-5 mt-10">
  <p class="text-sm">
    We have emailed a link for email verification. Click the link it will redirect you to your respective dashboard.
    If you have not received an email verification we gladly send you another one by clicking the button below.
  </p>


  <span class="text-sm text-orange-700 py-2">
    {{ session('message') }}
  </span>


  <form action="{{ route('verification.send') }}" method="POST">
    @csrf
    <button class="bg-orange-700 text-sm text-white px-2 py-2 rounded-md mt-2">Resend verification
      link</button>
  </form>
</div>
@endsection