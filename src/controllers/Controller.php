<?php 

namespace src\controllers;

abstract class Controller 
{
    protected static function render($view, $model = null)
    {
        $arquivo_view = "src/views/pages/$view.php";
        if(file_exists($arquivo_view)){
            include $arquivo_view;
        } else {
            echo "erro ao incluir view $view.php";
        }
        
    }
}