<?php
    include("con_db.php");

    $nombre = $_GET['nom'];
    $apellido_paterno = $_GET['apeP'];
    $apellido_materno = $_GET['apeM'];
    $an_naci = $_GET['anoN'];

    $resultados = mysqli_query($conexion,"SELECT * FROM `curp` INNER JOIN usuario on curp.id_usuario = usuario.id_usuario 
    WHERE (nombre = '$nombre') AND  (apellido_p = '$apellido_paterno') AND (apellido_m = '$apellido_materno') AND (año_nacimiento = '$an_naci')
    ");
        while($consulta = mysqli_fetch_array($resultados)){
            echo
            "
                <h1 style=\" text-align: center; margin-top:25px;\">Su CURP es:</h1>
                <div style=\"width: 80%; margin: auto;\">
                    <table width=\"100%\" border=\"1\" style=\"text-align: center;\">
                        <tr style=\"background: green; color: white;font-size: 28px;\">
                        <td><b>curp</b></td>
                        </tr>
                        <tr style=\"font-size: 25px;\">
                            <td>".$consulta['clave_curp']."</td>
                        </tr>
                    </table>
                </div>    
            ";
        }
 
?>