// resources/views/dashboard.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mb-4"><i class="fas fa-chart-bar"></i> Dashboard</h1>

  <!-- Chart.js -->
  <canvas id="salesChart"></canvas>

  <!-- DataTable -->
  <table id="usersTable" class="table table-striped mt-4">
    <thead>
      <tr><th>Nombre</th><th>Email</th></tr>
    </thead>
    <tbody>
      <tr><td>Manuel</td><td>luciferprincipedelastinieblas@gmail.com</td></tr>
      <tr><td>Usuario Demo</td><td>demo@example.com</td></tr>
    </tbody>
  </table>
</div>

<script type="module">
  import Chart from 'chart.js/auto';
  import 'datatables.net-bs4';

  // Chart.js demo
  const ctx = document.getElementById('salesChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo'],
      datasets: [{
        label: 'Ventas',
        data: [12, 19, 3],
        backgroundColor: 'rgba(54, 162, 235, 0.6)'
      }]
    }
  });

  // DataTables demo
  $(document).ready(function() {
    $('#usersTable').DataTable();
  });
</script>
@endsection
