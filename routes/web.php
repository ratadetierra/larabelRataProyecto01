<?php
// routes/web.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

/*
| Ruta de prueba para /admin y rutas mínimas usadas por el topbar
*/
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('/admin/search', function () {
    return redirect()->route('admin');
})->name('admin.search');

/*
| Rutas mínimas opcionales para evitar errores en enlaces del topbar.
| Crea las vistas correspondientes en resources/views si las vas a usar.
*/
Route::get('/profile', function () {
    return view('profile.show'); // resources/views/profile/show.blade.php
})->name('profile.show');

Route::get('/settings', function () {
    return view('settings.index'); // resources/views/settings/index.blade.php
})->name('settings');

/*
| Logout seguro (POST). Invalida la sesión y regenera el token CSRF.
*/
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');

/*
| Ruta mínima de login para evitar RouteNotFoundException en las vistas.
| Sustituye por tu sistema de autenticación cuando lo tengas.
*/
Route::get('/login', function () {
    return view('auth.login'); // resources/views/auth/login.blade.php
})->name('login');
