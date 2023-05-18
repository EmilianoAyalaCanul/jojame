<?php
    $conexion = mysqli_connect("localhost","root","","jojame");
    if($conexion->connect_errno){
        echo "Nuestro sitio experimenta fallos";
        exit();
    }
?>