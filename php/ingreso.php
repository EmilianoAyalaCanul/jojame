<?php
    include("con_db.php");

    $con = $conexion;

    $nombre=$_POST['nombre'];
    $monto=$_POST['monto'];
    $fecha=$_POST['fecha'];

    $sql = "INSERT INTO `ingresos`( `nombre`, `monto`, `fecha`, `id_usuario`) VALUES ('$nombre','$monto','$fecha','1')";
    if(mysqli_query($con,$sql)){
        header("Location: ../ingresos.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    include("cerrar_conexion.php");
?>