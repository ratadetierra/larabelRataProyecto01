<!-- resources/views/partials/topbar.blade.php (Bootstrap 5) -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3">
    <i class="fa fa-bars"></i>
  </button>

  <form class="d-flex ms-auto me-0 me-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('admin.search') ?? '#' }}" method="GET">
    <div class="input-group">
      <input type="text" name="q" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Buscar" aria-describedby="btn-search">
      <button class="btn btn-primary" type="submit" id="btn-search">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </form>

  <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge bg-danger badge-counter">3+</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">Notificaciones</h6>
        <li><a class="dropdown-item" href="#">Nueva orden recibida</a></li>
        <li><a class="dropdown-item" href="#">Usuario registrado</a></li>
        <li><a class="dropdown-item text-center small text-gray-500" href="#">Ver todas</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge bg-success badge-counter">7</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">Mensajes</h6>
        <li><a class="dropdown-item" href="#">Mensaje de soporte</a></li>
        <li><a class="dropdown-item text-center small text-gray-500" href="#">Leer todos</a></li>
      </ul>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    @auth
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="me-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
        <img class="img-profile rounded-circle" src="{{ Auth::user()->profile_photo_url ?? asset('sb-admin/img/undraw_profile.svg') }}" width="32" height="32" alt="Avatar">
      </a>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
        <li><a class="dropdown-item" href="{{ route('profile.show') ?? '#' }}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Perfil</a></li>
        <li><a class="dropdown-item" href="{{ route('settings') ?? '#' }}"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Ajustes</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Cerrar sesión
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
    </li>
    @endauth

  </ul>
</nav>
