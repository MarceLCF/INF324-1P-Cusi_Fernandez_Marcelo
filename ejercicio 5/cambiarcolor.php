<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<h2 class="text-center" style="color: white;">CAMBIAR COLOR</h2>
<div class="card container rounded-4 text-center col-3">
    <br>
    <form action="cambio.php" method="post">
        <br>
        <label for="colorInput">Elige el color: </label>
        <input type="color" id="colorInput" name="colorInput">
        <br><br>
        <p>El color seleccionado es: <span id="colorDisplay"></span></p>
        <br>

        <script>
            const colorInput = document.getElementById("colorInput");
            const colorDisplay = document.getElementById("colorDisplay");

            colorInput.addEventListener("input", function () {
                colorDisplay.textContent = colorInput.value;
                colorDisplay.style.color = colorInput.value;
            });
        </script>

        <input type="submit" style = "background-color:#606; color: white;" name="aceptar" value="Guardar" class="btn">
        <a href="index.php" class="btn btn-dark">Cancelar</a>
    </form>
    <br>
</div>
</body>

</html>