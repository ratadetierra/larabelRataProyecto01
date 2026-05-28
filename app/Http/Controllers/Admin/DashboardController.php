<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Si quieres aplicar middleware desde el controlador:
        // $this->middleware('auth');
        // $this->middleware(\App\Http\Middleware\EnsureUserIsAdmin::class);
        // O dejar vacío si ya lo aplicas en las rutas:
    }

    public function index()
    {
        // lógica del dashboard
        return view('admin.dashboard');
    }
}
