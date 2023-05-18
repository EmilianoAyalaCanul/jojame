<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="style.css?v6">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    <div class="contenedor">
        <div class="navbar"><!-- navegador principal --> 
            <div class="logo"><h2>Jojame Inc.</h2></div>
            <div class="buscador">
                <form action="" method="get"><!-- buscador -->
                    <input type="text" id="buscador" placeholder="Buscar" name="buscar">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="user">
                <img src="img/usuario.jpg" alt="No se encontro la imagen">
            </div>
        </div><!-- fin del navegador principal --> 
        <div class="barraizq"><!-- barra lateral izquierda-->
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <div>Inicio</div>
                    </a>
                </li>
                <li>
                    <a href="usuario.php">
                        <i class="fas fa-user-alt"></i>
                        <div>Usuario</div>
                    </a>
                </li>
                <li>
                    <a href="pagos.php">
                        <i class="far fa-credit-card"></i>
                        <div>Pagos</div>
                    </a>
                </li>
                <li>
                    <a href="ingresos.php">
                        <i class="fas fa-donate"></i>
                        <div>Ingresos</div>
                    </a>
                </li>
                <li>
                    <a href="estadisticas.php">
                        <i class="fas fa-chart-line"></i>
                        <div>Estadisticas</div>
                    </a>
                </li>
                <li style="background: white;">
                    <a href="#" style="color: black;">
                        <i class="fa fa-folder-open"></i>
                        <div>Registros</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-list"></i>
                        <div>Ajustes</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <div>Salir</div>
                    </a>
                </li>
            </ul>
        </div><!--fin barra lateral izquierda-->
        <div class="main"><!--contenedor principal-->
            <div class="presen">
                <h2>Buscar Registro</h2>
            </div>
            <div class="navbar"><!-- navegador de registros --> 
                <div class="logo"><h2>Registros</h2></div>
                <div class="buscador">
                    <form action="" method="get"><!-- buscador -->
                        <input type="text" id="buscador" placeholder="Buscar Registro" name="buscar">
                        <button><i class="fa fa-folder-open"></i></button>
                    </form>
                </div>
                <div class="user">
                    <img src="img/registro.png" alt="No se encontro la imagen">
                </div>
            </div><!-- fin de registros --> 
        </div><!--fin del contenedor principal-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="graficoscom.js"></script>
    <script src="graficoAnual.js"></script>
</body>
</html>