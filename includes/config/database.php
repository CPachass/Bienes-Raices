<?php 

function conectar_db() : mysqli {
    $db = mysqli_connect("localhost", "root", "YJ74851293ve&", "bienesraices_crud");
    if (!$db) {
        echo "Error: no se pudo conectar";
        exit;
    }
    return $db;
}