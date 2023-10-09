<?php
    include('conexion.php');
    //$conexion=conexion();
    $usuario = $_REQUEST['usuario'];
    $password = $_REQUEST['contrasena'];
    $consulta = "SELECT * FROM docente WHERE ('$usuario' like user) AND ('$password' like contrasena)";
    $resultadosql = mysqli_query($con,$consulta);
    if ($fila = mysqli_fetch_row($resultadosql)) {
        session_start();
        $_SESSION['user']="docente";
        $_SESSION['id']=$fila[0];
        $_SESSION['nombre']=$fila[1];
        $_SESSION['color']="0";
        header("Location: index.php");
    }else{
        $consulta = "SELECT * FROM estudiante WHERE ('$usuario' like usuario) AND ('$password' like contrasena) ";
        $resultadosql = mysqli_query($con,$consulta);
        if ($fila = mysqli_fetch_row($resultadosql)) {
            session_start();
            $_SESSION['user']="estudiante";
            $_SESSION['id']=$fila[0];
            $_SESSION['nombre']=$fila[2]." ".$fila[1];
            $_SESSION['color']="0";
            header("Location: index.php");
        }else{
            echo "
                <script>
                    alert('DATOS ERRONEOS');
                    window.history.back();
                </script>";    
        }

        
    }
?>