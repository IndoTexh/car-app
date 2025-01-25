<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'first_name' => ['required', 'max:255', 'string'],
            'last_name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'confirmed', 'min:5'],
            'phone' => ['required']
        ]);
        $message = 'Thank you for signing up';
        $subject = 'Please verify your email address by clicking on this button.';
        $user = User::create($credentials);
        event(new Registered($user));
        $user->sendEmailVerificationNotification();
        auth()->login($user);
        return redirect()->route('profile');
    }
}
