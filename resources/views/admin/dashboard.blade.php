<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Panel de administración')

@section('content')
<div class="container py-4">
  <div class="card">
    <div class="card-header">
      <h2>Dashboard</h2>
    </div>
    <div class="card-body">
      <p>Si ves esto, la ruta <strong>/admin</strong> funciona correctamente.</p>
      <a href="{{ url('/') }}" class="btn btn-secondary">Volver al inicio</a>
      <a href="{{ route('logout') }}" class="btn btn-danger"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar sesión
      </a>
    </div>
    <div class="card-footer text-muted">
      © {{ date('Y') }} Tu proyecto
    </div>
  </div>
</div>
@endsection
