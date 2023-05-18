<script>
  <?php 
    $g = "Gastos";
    ?>

  const x = document.getElementById('graficomes2');
  const g = "<?php echo $g; ?>";
  new Chart(x, {
    type: 'pie',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      datasets: [{
        label: g,
        data: [15500,10500,5600,8000,7500,4300,10000,6800,14000,9600,13500,20000],
        borderWidth: 1
      }]
    },
    options: {

      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>