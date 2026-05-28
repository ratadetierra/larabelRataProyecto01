<!-- resources/views/partials/sidebar.blade.php -->
<nav class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a href="{{ route('admin.dashboard') }}" class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Mi Panel</div>
  </a>

  <hr class="sidebar-divider my-0">

  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
  </ul>

  <hr class="sidebar-divider d-none d-md-block">
</nav>
