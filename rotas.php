<?php

use src\controllers\UsuarioController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "home";
    break;
    
    case '/usuarios':
        UsuarioController::index();
    break;
    
    case '/usuarios/form':
        UsuarioController::form();
    break;

    case '/usuarios/form/save':
        UsuarioController::save();
    break;   
    
    case '/usuarios/delete':
        UsuarioController::delete();
    break;

    default:
        echo "ERRO 404";
    break;
    
}