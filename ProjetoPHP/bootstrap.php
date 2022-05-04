<?php

require_once(__DIR__."/vendor/autoload.php");

//Aqui recuperamos o que o usuario digita e qual metodo HTTP foi utilizado

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instaciar classe Router
$router = new ProjetoPHP\Router($method,$path);

//Adicionar as rotas validas abaixo

$router->get("/ola-mundo", function(){
    return "Olá Mundo!";
});

//Adicionar as rotas validas acima

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Pagina não encontrada!!";
    die();    
}

echo $result($router->getParams());