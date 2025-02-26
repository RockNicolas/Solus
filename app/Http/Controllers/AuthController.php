<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);  
            return redirect()->route('dashboard')->with('success', 'Login bem-sucedido!');
        }
        return back()->with('error', 'Credenciais inválidas. Tente novamente.')->withInput();
    }
}
