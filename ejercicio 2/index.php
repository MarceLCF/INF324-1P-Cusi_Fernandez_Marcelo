    <?php 
    include("header.php");
    $doc = 0;
    if(isset($_SESSION['user'])){
        echo '<a href="cambiarcolor.php" class="btn btn-dark" style ="color: white;">Cambiar Color</a>';
    }
    echo '<div ';
    echo '<section id="fondo">';
    echo '<img src="imagenes/ini.png" style="width: 100%;" />';
    echo '</section>';
    echo '</div>';

    include("footer.php");
    ?>