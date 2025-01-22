@extends('layouts.app')

@section('bg-color', 'bg-gray-200')

@section('title', 'Reset Password')

@section('content')
<div class="bg-white shadow-lg max-w-sm mx-auto rounded-md text-orange-700 font-bold p-5 mt-10">
  <p class="text-sm">
    Thank you for signing up! Before getting started,
    could you please verify you email address by clicking on the link
    we just emailed you? If you didn't receive the email we gladly send you another.
  </p>


  <span class="text-sm text-orange-700 py-2">
    {{ session('message') }}
  </span>


  <form action="{{ route('verification.send') }}" method="POST">
    @csrf
    <button class="bg-orange-700 text-sm text-white px-2 py-2 rounded-md mt-2">
      Resend verification email
    </button>
  </form>
</div>
@endsection