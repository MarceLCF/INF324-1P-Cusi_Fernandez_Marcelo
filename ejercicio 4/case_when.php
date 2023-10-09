<?php 
include("header.php");
?>

    <div>
        <br>
        <table class="table table-striped" style="border-collapse:collapse;">
        <?php
            $consulta = "SELECT * FROM estudiante";
            $res = mysqli_query($con, $consulta);
            print_r('
                <tr>
                    <th>CI</th>
                    <th>NOMBRE</th>
                    <th>DEPARTAMENTO</th>
                    <th>GENERO</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>NOTA</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                </tr>
            ');
            while ($reg=mysqli_fetch_array($res)) {
                // print_r($res);
                echo "<tr>";
                echo "<td>".$reg["ci"]."</td>";
                echo "<td>".$reg["nombres"]." ".$reg["apellidos"]."</td>";
                echo "<td>".$reg["depto"]."</td>";
                echo "<td>".$reg["genero"]."</td>";
                echo "<td>".$reg["fecha_nac"]."</td>";
                echo "<td>".$reg["nota"]."</td>";
                echo "<td>".$reg["usuario"]."</td>";
                echo "<td>".$reg["contrasena"]."</td>";
                //echo "<td>";
                //echo "<a href='modif.php?ci=".$reg["id"]."'>Modificar </a>";
                //echo "<a href='eliminar.php?ci=".$reg["id"]."'>Eliminar</a>";
                //echo "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>  
    <br>
    <h2>Media de notas por departamento</h2>
    <div>
        <br>
        <table class="table table-striped" style="border-collapse:collapse;">
        <?php
            //*****CASE WHEN******
            $consulta = "SELECT
                DISTINCT CASE
                    WHEN depto LIKE 'La Paz' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'La Paz')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'La Paz')+0
                END AS 'La Paz',
                
                CASE
                    WHEN depto LIKE 'Oruro' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Oruro')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Oruro')+0
                END AS 'Oruro',
                
                 CASE
                    WHEN depto LIKE 'Cochabamba' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Cochabamba')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Cochabamba')+0
                END AS 'Cochabamba',
                
                CASE
                    WHEN depto LIKE 'Potosi' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Potosi')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Potosi')+0
                END AS 'Potosi',
                
                 CASE
                    WHEN depto LIKE 'Santa Cruz' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Santa Cruz')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Santa Cruz')+0
                END AS 'Santa Cruz',

                CASE
                    WHEN depto LIKE 'Tarija' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Tarija')
                    ELSE (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Tarija')+0
                END AS 'Tarija',

                CASE
                    WHEN depto LIKE 'Chuquisaca' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Chuquisaca')
                    ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Chuquisaca')+0)
                END AS 'Chuquisaca',
                
                CASE
                    WHEN depto LIKE 'Beni' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Beni')
                    ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Beni')+0)
                END AS 'Beni',
                
                CASE
                    WHEN depto LIKE 'Pando' THEN (SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Pando')
                    ELSE ((SELECT AVG(nota) FROM estudiante WHERE depto LIke 'Pando')+0)
                END AS 'Pando'
            FROM
                estudiante;";

            $res = mysqli_query($con, $consulta);
            $lp = "La Paz"; $cb = "Cochabamba"; $sc = "Santa Cruz";
            $ch = "Chuquisaca"; $or = "Oruro"; $pt = "Potosi"; $tr = "Tarija";
            $bn = "Beni"; $pd = "Pando";

            print_r('
                <tr>
                    <th>'.$lp.'</th>
                    <th>'.$cb.'</th>
                    <th>'.$sc.'</th>
                    <th>'.$or.'</th>
                    <th>'.$ch.'</th>
                    <th>'.$pt.'</th>
                    <th>'.$tr.'</th>
                    <th>'.$pd.'</th>
                    <th>'.$bn.'</th>
                </tr>');
            while ($reg=mysqli_fetch_array($res)) {
                print_r('
                    <tr>
                        <td>'.$reg[$lp].'</td>
                        <td>'.$reg[$cb].'</td>
                        <td>'.$reg[$sc].'</td>
                        <td>'.$reg[$or].'</td>
                        <td>'.$reg[$ch].'</td>
                        <td>'.$reg[$pt].'</td>
                        <td>'.$reg[$tr].'</td>
                        <td>'.$reg[$pd].'</td>
                        <td>'.$reg[$bn].'</td>
                    </tr>');
            }
        ?>
        </table>
    </div>  
    <br>

    <?php
        include("footer.php");
    ?>
