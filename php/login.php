<?php
    $usuario = $_POST['us'];
    $pass = $_POST['pas'];

    $no='<br><a href="../login.html">Regresar</a>';

    $conexion = mysqli_connect("localhost","root","","jojame");
    $consulta = "SELECT * FROM usuario WHERE email='$usuario' and password = '$pass'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        header("Location:../index.php");
    }
    else{
        echo"Error en la autentificacion";
        echo $no;
    }

    include("cerrar_conexion.php");
?>