{{-- resources/views/layouts/app.blade.php --}}
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name'))</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos compilados por Vite -->
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])

  <!-- Import externos -->
  <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600">

  @stack('styles')
</head>
<body>
  <!-- Navbar superior -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
              </a>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <!-- Sidebar neumórfico -->
    <aside class="sidebar-neumorphic p-3">
      <ul class="nav flex-column">
        <li class="nav-item mb-3">
          <a class="nav-link" href="{{ route('home') }}">🏠 Inicio</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="{{ route('profile.show') }}">👤 Perfil</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="{{ route('settings') }}">⚙️ Configuración</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
        </li>
      </ul>
    </aside>

    <!-- Contenido principal -->
    <main class="flex-grow-1 p-4">
      @yield('content')
    </main>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
    @csrf
  </form>

  <!-- Bootstrap JS (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
