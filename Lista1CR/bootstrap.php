<?php


require_once(__DIR__ . "/vendor/autoload.php");

//Aqui recuperamos o que o usuario digita e qual metodo HTTP foi utilizado

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \ProjetoPHP\Router($method, $path);

//Adicionar as rotas validas abaixo

$router->get("/ola-mundo", function () {
    return "Olá Mundo!";
});

//Rota para o Exericicio 01
$router->get("/exercicio1", 'ProjetoPHP\Controller\Controller_01::exibir');
$router->post('/exercicio1-resultado', 'ProjetoPHP\Controller\Controller_01::exibirResultado');

//Rota para o Exericicio 02
$router->get("/exercicio2", 'ProjetoPHP\Controller\Controller_02::exibir');
$router->post('/exercicio2-resultado', 'ProjetoPHP\Controller\Controller_02::exibirResultado');

//Rota para o Exericicio 03
$router->get("/exercicio3", 'ProjetoPHP\Controller\Controller_03::exibir');
$router->post('/exercicio3-resultado', 'ProjetoPHP\Controller\Controller_03::exibirResultado');

//Rota para o Exericicio 04
$router->get("/exercicio4", 'ProjetoPHP\Controller\Controller_04::exibir');
$router->post('/exercicio4-resultado', 'ProjetoPHP\Controller\Controller_04::exibirResultado');

//Rota para o Exericicio 05
$router->get("/exercicio5", 'ProjetoPHP\Controller\Controller_05::exibir');
$router->post('/exercicio5-resultado', 'ProjetoPHP\Controller\Controller_05::exibirResultado');


//Adicionar as rotas validas acima

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Pagina não encontrada!!";
    die();
}

echo $result($router->getParams());
