<!--- Welcome.blade.php ------>

@extends('layouts.app')

@section('content')
<div class="container-stars">
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>

  <div class="welcome-content">
    <h1>Bienvenido a Rats Proyecto</h1>
    <p>Explora tu aplicación con un fondo estrellado animado.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
  </div>
</div>
@endsection

