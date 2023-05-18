<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Inicio</title>
    <link rel="stylesheet" href="style.css?v5">
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
                <li>
                    <a href="registros.php">
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
                <h2>Bienvenido</h2>
            </div>
            <div class="cartas"><!--inicio de cartas-->
                <div class="carta">
                    <div class="carta-contenido">
                        <div class="numero">$35,500</div>
                        <div class="nombre-carta">Ingresos</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-donate"></i>
                    </div>
                </div>
                <div class="carta">
                    <div class="carta-contenido">
                        <div class="numero">$5,315</div>
                        <div class="nombre-carta">Pagos</div>
                    </div>
                    <div class="icon-box">
                        <i class="far fa-credit-card"></i>
                    </div>
                </div>
                <div class="carta">
                    <div class="carta-contenido">
                        <div class="numero">$2,500</div>
                        <div class="nombre-carta">Pagos extras</div>
                    </div>
                    <div class="icon-box">
                        <i class="far fa-credit-card"></i>
                    </div>
                </div>
                <div class="carta">
                    <div class="carta-contenido">
                        <div class="numero">$450,600</div>
                        <div class="nombre-carta">Ahorros</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-donate"></i>
                    </div>
                </div>
            </div><!--fin de cartas-->
            <div class="graficos"><!--graficos-->
                <div class="grafico">
                    <h2>Movimientos Bancarios del Mes</h2>
                    <canvas id="graficomes"></canvas>
                </div>
                <div class="grafico">
                    <h2>Gastos Anuales (ultimos 12 meses)</h2>
                    <canvas id="graficomes2"></canvas>
                </div>
            </div>
        </div><!--fin del contenedor principal-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php include("graficom.php") ?>
    <?php include("graficoanual.php")?>   
</body>
</html>