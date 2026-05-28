@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Login</h1>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
      <label for="email">Email</label>
      <input id="email" type="email" name="email" required autofocus>
    </div>
    <div>
      <label for="password">Contraseña</label>
      <input id="password" type="password" name="password" required>
    </div>
    <button type="submit">Entrar</button>
  </form>
</div>
@endsection
