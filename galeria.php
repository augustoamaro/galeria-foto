<?php
    $acao = filter_input(INPUT_GET, 'acao');

    switch($acao){
        case "listar":
            include_once 'galeria/lista.php';
        break;
        case "incluir":
            include_once 'galeria/incluir.php';
        break;
        default:
            include_once 'galeria/lista.php';
        break;

    }
?>