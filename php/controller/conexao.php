<?php
    include_once "config.php";

    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$link) {
        echo "Falha ao Conectar";
        exit;
    }


?>