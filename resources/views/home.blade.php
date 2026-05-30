{{-- resources/views/home.blade.com --}}

@extends('layouts.app')

@section('content')
<div class="container text-center py-5">

  <!-- Hero -->
  <h1 class="mb-4">Bienvenido a Rats Proyecto</h1>
  <p class="lead mb-5">Explora tu aplicación con un diseño neumórfico moderno.</p>
  <a href="{{ route('login') }}" class="btn btn-neumorphic">Iniciar sesión</a>

  <!-- Tarjetas neumórficas -->
  <div class="row mt-5">
    <div class="col-md-4 mb-4">
      <div class="card card-neumorphic p-4 animate-fade">
        <h3>👤 Perfil</h3>
        <p>Administra tu información personal.</p>
        <a href="{{ route('profile.show') }}" class="btn btn-neumorphic">Ir al perfil</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card card-neumorphic p-4 animate-fade">
        <h3>⚙️ Configuración</h3>
        <p>Personaliza las opciones del sistema.</p>
        <a href="{{ route('settings') }}" class="btn btn-neumorphic">Configurar</a>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card card-neumorphic p-4 animate-fade">
        <h3>📊 Dashboard</h3>
        <p>Visualiza estadísticas y administra datos.</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-neumorphic">Ver dashboard</a>
      </div>
    </div>
  </div>

</div>
@endsection
