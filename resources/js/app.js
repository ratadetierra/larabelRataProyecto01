console.log('resources/js/app.js cargado');

// Bootstrap siempre se carga
import 'bootstrap';

// Chart.js solo si existe el canvas
if (document.getElementById('salesChart')) {
  import('chart.js/auto').then(({ default: Chart }) => {
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
  });
}

// DataTables solo si existe la tabla
if (document.getElementById('usersTable')) {
  import('datatables.net-bs4').then(() => {
    $('#usersTable').DataTable();
  });
}
