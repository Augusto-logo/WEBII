<?php
header('Access-Control-Allow-Origin: *');

require __DIR__. "/vendor/autoload.php";

/*
$modulo = filter_input(INPUT_GET,'mod', FILTER_SANITIZE_STRING);
$acao = filter_input(INPUT_GET,'acao', FILTER_SANITIZE_STRING);

$modulo = 'Controle' . ucfirst($modulo);

if (class_exists($modulo)) {
    $obj = new $modulo();
    if(method_exists($modulo, $acao)){
        echo $obj->$acao();
    } else {
        echo 'No action...';
    }
} else {
    echo 'No module...';
}
*/

// Require composer autoloader

// Create Router instance

#use \Bramus\Router\Router; usar o USE com arquivos do composer

$router = new \Bramus\Router\Router();

// Define routes
$router->all('/{mod}/{acao}', function($mod, $acao) { 
    
    $modulo = '\Crud\Controle\Controle' . ucfirst($mod);

    if (class_exists($modulo)) {
        $obj = new $modulo();
        if(method_exists($modulo, $acao)){
            echo $obj->$acao();
        } else {
            echo 'No action...';
        }
    } else {
        echo 'No module...';
    }
});

// Run it!
$router->run();

