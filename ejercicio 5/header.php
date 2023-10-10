<?php
    include('conexion.php');
    session_start();
    $color = "#666";
    if(isset($_SESSION['color'])){
        if($_SESSION['color'] !== "0")
            $color = $_SESSION["color"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INF 324</title>
    <style>
        /* Estilos para la barra de navegación */
        ul.navbar {
            list-style-type: none;
            background-color: <?php echo $color; ?>; /* Color de fondo de la barra de navegación */
        }

        li.navitem {
            float: right; /* Colocar los elementos en la barra de navegación de izquierda a derecha */
        }

        li.navitem a {
            display: block;
            color: black;
            text-align: center;
            padding: 10px 10px;
            text-decoration: revert-layer;
            text-transform: uppercase;
            font-family: cursive;
        }

        li.navitem a:hover {
            background-color: #ccc; /* Color de fondo al pasar el mouse por encima de un elemento */
        }
    </style>
</head>
<body>
    <header style="background-color: <?php echo $color;?>">
        <h2><img src="Imagenes/logo.png" style="height: 50px;">  CARRERA DE INFORMATICA</h2>
        <hr style="border-color: black;">
        <nav>
            <ul class="navbar">
                <li class="navitem"><a href="index.php">Inicio</a></li>
                <li class="navitem"><a href="carrera.php">Carrera</a></li>
                <li class="navitem"><a href="kardex.php">Kardex</a></li>
                <li class="navitem"><a href="instituto.php">Instituto de Investigación</a></li>

                <?php
                    if(isset($_SESSION['user'])){
                        if($_SESSION['user']=="estudiante")
                            $x = "Estudiante";
                        if($_SESSION['user']=="docente"){
                            echo '<li class="navitem"><a href="arrays.php">Ver notas</a></li>';
                            //echo '<li class="navitem"><a href="case_when.php">Ver notas</a></li>';
                            $x = "Docente";
                        }
                        echo "<b>".$x.": ".$_SESSION["nombre"]."</b>"."<br>";
                        echo '<li><a class="btn btn-danger" href="salir.php">Cerrar Sesion</a></li>';
                    }
                    else
                        echo '<li><a class="btn btn-danger" href="login.php">Ingresar</a></li>';
                ?>
                
            </ul>

        </nav>

    </header>
    <hr>
