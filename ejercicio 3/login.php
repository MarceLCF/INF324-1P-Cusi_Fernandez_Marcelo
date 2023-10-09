<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body{    
            background-image: url(../Imagenes/fondo.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;
        }
        nav.navbar {
            background-color: #FFFFFF;
        }
        .btn-primary{
            background-color:#F76242;
            border-color:#F76242;
        }
    </style>
</head>


<body>
<BR></BR>
<BR></BR>
<h2 class="text-center" style="color: white;">INICIO DE SESION</h2>
<div class="card container rounded-4 text-center col-3">
    <br>
    <form action="ingreso.php" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
        <br>
        <input type="text" placeholder="Ingrese nombre de usuario" name="usuario" id="usuario">
        <br><br>
        <input type="password" placeholder="Ingrese contraseña" name="contrasena" id="contrasena">
        <br><br>
        <input type="submit" style = "background-color:#606; color: white;" name="iniciarSesion" value="Iniciar Sesión" class="btn">
        <a href="index.php" class="btn btn-dark">Cancelar</a>
    </form>
    <br>
</div>
</body>

</html>