<?php
// routes/web.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\EnsureUserIsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Vista de inicio personalizada (home.blade.php)
Route::get('/home', function () {
    return view('home');
})->name('home');

// Página principal por defecto (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
});

// Vista de perfil del usuario (profile/show.blade.php)
Route::get('/profile', function () {
    return view('profile.show');
})->name('profile.show');

// Vista de configuración del sistema (settings/index.blade.php)
Route::get('/settings', function () {
    return view('settings.index');
})->name('settings');

// Logout seguro (no tiene vista, solo acción)
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Grupo de rutas admin protegidas por auth + EnsureUserIsAdmin
Route::middleware(['auth', EnsureUserIsAdmin::class])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Dashboard principal (admin/dashboard.blade.php)
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Ruta de búsqueda → redirige al dashboard (no tiene vista propia)
        Route::get('/search', function () {
            return redirect()->route('admin.dashboard');
        })->name('search');
    });

// Vista de login (auth/login.blade.php)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Procesar login (POST) → valida credenciales y redirige al dashboard
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }

    return back()->withErrors([
        'email' => 'Las credenciales no son correctas.',
    ])->onlyInput('email');
})->name('login.post');

/*
| Si tienes Breeze instalado, puedes incluir sus rutas de auth:
| require __DIR__.'/auth.php';
|
| Si luego habilitas Auth::routes() (laravel/ui), revisa compatibilidad.
*/
