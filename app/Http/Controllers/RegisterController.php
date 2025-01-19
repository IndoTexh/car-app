<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

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
        $user = User::create($credentials);
        event(new Registered($user));
        auth()->login($user);
        return redirect()->route('home');
    }
}
