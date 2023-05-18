<script>

    <?php 
    $a = "gasto del mes junio 2023";
    
    ?>
        const $c = document.querySelector("#gpagos");

        if(window.graficagastos){
          window.graficagastos.clear();
        	window.graficagastos.destroy();
        }
        
        const $label = "<?php echo $a; ?>";
        
        window.graficagastos = new Chart($c, {
          type: 'line',
          data: {
            labels: ['Luztier', 'Netflix', 'Internet', 'Alimentos', 'Salidas', 'Tarjetas'],
            datasets: [{
              label: $label,
              data: [2000, 250, 1500, 4350, 2500, 3500],
              borderWidth: 1,
              backgroundColor: '#cb3234',
              borderColor: '#cb3234'
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