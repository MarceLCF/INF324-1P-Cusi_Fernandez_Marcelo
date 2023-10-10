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
                echo "</tr>";
            }
        ?>
        </table>
    </div>
    <br>
    <h2>Media de notas por departamento (con arrayas)</h2>
    <div>
        <br>
        <table class="table table-striped" style="border-collapse:collapse;">
        <?php
            $consulta = "SELECT depto, nota FROM estudiante";
            $res = mysqli_query($con, $consulta);
            //*** CON ARRAYS ***************************
            $lp = "La Paz"; $cb = "Cochabamba"; $sc = "Santa Cruz";
            $ch = "Chuquisaca"; $or = "Oruro"; $pt = "Potosi"; $tr = "Tarija";
            $bn = "Beni"; $pd = "Pando";

            $p_lp = 0; $p_cb = 0; $p_sc = 0; $p_ch = 0; $p_or = 0; $p_pt = 0;
            $p_tr = 0; $p_bn = 0; $p_pd = 0;

            $sum_notas = array(
                $lp => 0, $cb => 0, $sc => 0, $ch => 0, $or => 0, $pt => 0,
                $tr => 0, $bn => 0, $pd => 0
            );

            $cantidad = array(
                $lp => 0, $cb => 0, $sc => 0, $ch => 0, $or => 0, $pt => 0,
                $tr => 0, $bn => 0, $pd => 0
            );

            foreach ($res as $linea) {
                $sum_notas[$linea['depto']] += $linea['nota'];
                $cantidad[$linea['depto']] += 1;
            }
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
                </tr>
                <tr>');
            foreach ($sum_notas as $depto => $val) {
                if($cantidad[$depto] == 0)
                    echo '<td>'.$sum_notas[$depto].'</td>';
                else{
                    $media = round($sum_notas[$depto]/$cantidad[$depto],2);
                    echo '<td>'.$media.'</td>';
                }
            }
            echo "</tr>";
            //************************************+
        ?>
        </table>
    </div>  
    <br>
    <?php
        include("footer.php");
    ?>