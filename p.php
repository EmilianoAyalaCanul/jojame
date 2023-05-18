<?php
include("php/con_db.php");
$con = $conexion;
$datos = array();


$sql = "SELECT nombre FROM `pagos`";

$resultado=mysqli_query($con,$sql);

if($resultado){
    while($row = $resultado->fetch_array()){
        $nombre =$row['nombre'];
        $datos[]= $nombre;
    }
}

echo $datos[0],$datos[1];
?>