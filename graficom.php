<script>
    <?php 
    $i = "ingresos por semana";
    $g = "gasto gastos por semana";
    ?>

    const $g= "<?php echo $g; ?>";//crear constante que almacene la variable php
    const $i= "<?php echo $i; ?>";//crear constante que almacene la variable php

    // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#graficomes");
    // Las etiquetas son las que van en el eje X. 
    const etiquetas = ["Semana 1", "Semana 2", "Semana 3", "Semana 4"]
    // Podemos tener varios conjuntos de datos
    const datosVentas2020 = {
        label: $g,
        data: [2500, 3500, 1850, 20000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: '#cb3234', // Color de fondo
        borderColor: '#cb3234', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    const datosVentas2021 = {
        label: $i,
        data: [5000, 2750, 4000, 35000], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: '#03bb85',// Color de fondo
        borderColor: '#03bb85',// Color del borde
        borderWidth: 1,// Ancho del borde
    };

    new Chart($grafica, {
        type: 'line',// Tipo de gráfica
        data: {
            labels: etiquetas,
            datasets: [
                datosVentas2020,
                datosVentas2021,
                // Aquí más datos...
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
</script>