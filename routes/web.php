<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------- 
| Web Routes 
|--------------------------------------------------------------------------- 
*/

Route::get('/', function () {
    return auth()->check() ? redirect()->route('home') : redirect()->route('login');
});
Route::get('/login', function () {
    if (auth()->check()) {
        return redirect()->route('home');
    }
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->name('home');  


// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);

require __DIR__.'/auth.php'; 
