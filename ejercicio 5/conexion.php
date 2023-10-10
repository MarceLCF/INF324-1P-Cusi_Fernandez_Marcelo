<?php
    $server = "localhost";
    $user = "root";
    $pass = "";

    $db = "mibd_cusi";

    $con = mysqli_connect($server, $user, $pass);
    mysqli_select_db($con,$db);
?>