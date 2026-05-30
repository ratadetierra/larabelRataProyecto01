<!-- resources/views/layouts/admin.blade.php -->
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Admin')</title>
 @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body>
  <div id="wrapper" class="d-flex flex-column min-vh-100">
    @include('partials.topbar')

    <main class="container-fluid">
      <div class="mt-4">
        @yield('content')
      </div>
    </main>

    <footer class="text-center py-3">
      <small class="text-muted">© {{ date('Y') }} Tu proyecto</small>
    </footer>
  </div>
</body>
</html>
