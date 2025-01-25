<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function updateInfo(Request $request)
    {
        $fields = $request->validate([
            'first_name' => 'required|max:255|min:3',
            'last_name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $request->user()->fill($fields);
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();
        return redirect()->route('profile');
    }
    public function updatePassword(Request $request)
    {
        $fields = $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|min:3|confirmed'
        ]);
        $request->user()->update([
            'password' => Hash::make($fields['password'])
        ]);
        return redirect()->route('profile');
    }
}
