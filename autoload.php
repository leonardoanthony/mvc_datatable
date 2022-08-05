<?php 

spl_autoload_register(function ($class) {
    $arquivo = $class.".php";
    if(file_exists($arquivo)){
        include $class.".php";
    }else{
        echo "Não foi possível incluir o arquivo: $class.php";
    }
});