<?php


require_once(__DIR__ . "/vendor/autoload.php");

//Aqui recuperamos o que o usuario digita e qual metodo HTTP foi utilizado

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Lista1MVC\Router($method, $path);

//Adicionar as rotas validas abaixo

$router->post("/Exercicio-01", 'Lista1MVC\Controller\Controller_01::exibir');

$router->post("/Exercicio-02", 'Lista1MVC\Controller\Controller_02::exibir');

$router->post("/Exercicio-03", 'Lista1MVC\Controller\Controller_03::exibir');

$router->post("/Exercicio-04", 'Lista1MVC\Controller\Controller_04::exibir');

$router->post("/Exercicio-05", 'Lista1MVC\Controller\Controller_04::exibir');



//Adicionar as rotas validas acima

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Pagina não encontrada!!";
    die();
}

echo $result($router->getParams());
