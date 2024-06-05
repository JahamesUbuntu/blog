<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($validated)) {
            $validator = validator()->make([], [])
                ->errors()
                ->add('password', 'We could not find any matching records');

            return back()->withErrors($validator);
        }

        return redirect()->route('posts.index');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255',
        ]);

        $user = User::create($validated);

        auth()->login($user);

        return redirect()->route('posts.index');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
