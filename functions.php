<?php

function redireccionarPagina($page){
    switch($page){
        case 'inicio':
            header('location: index.php');
        break;
        case 'servicios':
            header('location: servicios.php');
        break;
        case 'trabajos':
            header('location: trabajos.php');
        break;
        case 'preguntas':
            header('location: preguntas.php');
        break;
        case 'contacto':
            header('location: contacto.php');
        break;
    }
}

?>