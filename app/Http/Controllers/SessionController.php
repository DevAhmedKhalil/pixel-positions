<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => ['Sorry, The provided credentials are incorrect.'],
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }

    public function destroy(string $id)
    {
        Auth::logout();

        return redirect('/');
    }
}
