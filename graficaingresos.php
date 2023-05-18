<script>
    <?php 
    $a = "Ingresos del mes";
    //codigo php qweyis
    ?>
    const $gf = document.querySelector("#graficoingreso");
    const $tp = "<?php echo $a; ?>";

    if(window.grafica){
      window.grafica.clear();
    	window.grafica.destroy();
    }

    window.grafica = new Chart($gf, {
      type: 'line',
      data: {
        labels: ['Reparacion', 'Sueldo de la constructora', 'venta de tacos', 'venta de tenis','taqiotps'],
        datasets: [{
          label: $tp,
          data: [18500, 8500, 3500, 1250,5500],
          borderWidth: 1,
          backgroundColor: '#03bb85',
          borderColor: '#03bb85',
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