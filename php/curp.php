<?php
    include("con_db.php");

    $clave_curp= $_GET['curp'];
    $resultados = mysqli_query($conexion,"SELECT * FROM `curp` INNER JOIN usuario on curp.id_usuario = usuario.id_usuario WHERE clave_curp = '$clave_curp'");
        while($consulta = mysqli_fetch_array($resultados)){
            echo
            "
                <h1 style=\" text-align: center; margin-top:25px;\">Resultados de busqueda</h1>
                <div style=\"width: 80%; margin: auto;\">
                    <table width=\"100%\" border=\"1\" style=\"text-align: center;\">
                        <tr style=\"background: green; color: white;font-size: 28px;\">
                        <td><b>nombre</b></td>
                        <td><b>primer apellido</b></td>
                        <td><b>segundo apellido</b></td>
                        <td><b>dia de nacimiento</b></td>
                        <td><b>mes de nacimiento</b></td>
                        <td><b>año de nacimiento</b></td>
                        <td><b>sexo</b></td>
                        <td><b>estado</b></td>
                        </tr>
                        <tr style=\"font-size: 25px;\">
                            <td>".$consulta['nombre']."</td>
                            <td>".$consulta['apellido_p']."</td>
                            <td>".$consulta['apellido_m']."</td>
                            <td>".$consulta['dia_nacimiento']."</td>
                            <td>".$consulta['mes_nacimiento']."</td>
                            <td>".$consulta['año_nacimiento']."</td>
                            <td>".$consulta['sexo']."</td>
                            <td>".$consulta['estado']."</td>
                        </tr>
                    </table>
                </div>    
            ";
        }

    
?>