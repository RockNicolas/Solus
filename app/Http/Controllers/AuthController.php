<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);
    
        if ($request->username === 'usuario_teste' && $request->password === '123456') {
            $fakeUser = (object) [
                'id' => 1,
                'username' => 'usuario_teste',
                'name' => 'Usuário Teste',
                'email' => 'teste@email.com'
            ];
    
            session(['user' => $fakeUser]);
            Auth::login($fakeUser);
            if (Auth::check()) {
                return redirect()->route('home')->with('success', 'Login bem-sucedido!');
            }
    
            return back()->with('error', 'Falha ao autenticar o usuário.');
        }
        return back()->with('error', 'Credenciais inválidas. Tente novamente.')->withInput();
    }
    public function logout()
    {
        session()->forget('user');
        Auth::logout(); 
        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }
}
