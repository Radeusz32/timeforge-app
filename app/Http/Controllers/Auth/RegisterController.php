<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\Auth\RegisterUser;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function show()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        RegisterUser::run($validated);

        return redirect('/dashboard');
    }
}
