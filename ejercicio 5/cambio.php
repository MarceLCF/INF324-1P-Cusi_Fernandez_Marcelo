<?php
    session_start();
    //$usuario = $_REQUEST['usuario'];
    $col = $_POST['colorInput'];
    $_SESSION['color'] = $col;
    //echo $_SESSION["color"];
    header("Location: index.php");
?>