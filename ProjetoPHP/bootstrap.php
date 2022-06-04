<?php


require_once(__DIR__ . "/vendor/autoload.php");

//Aqui recuperamos o que o usuario digita e qual metodo HTTP foi utilizado

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \ProjetoPHP\Router($method, $path);

//Adicionar as rotas validas abaixo

//Controlador de Teste Conexao
$router->get("/ola-mundo", function () {
    return "Olá Mundo!";
});
//Controlador de Teste Conexao

//Controladores Exercicio Controller
$router->get("/exemplo", 'ProjetoPHP\Controller\ExercicioController::exibir');
$router->post('/exemplo-resultado', 'ProjetoPHP\Controller\ExercicioController::exibirResultado');
//Controladores Exercicio Controller


//Controladores Clientes Controller
$router->get('/cliente/novo', 'ProjetoPHP\Controller\ClientesController::abrirFormularioInserir');
$router->post('/cliente/inserir', 'ProjetoPHP\Controller\ClientesController::inserirCliente');
$router->get('/clientes', 'ProjetoPHP\Controller\ClientesController::abrirListaClientes');
$router->get('/cliente/alterar/{id}', 'ProjetoPHP\Controller\ClientesController::abrirFormularioAlterar');
$router->post('/cliente/editar/{id}', 'ProjetoPHP\Controller\ClientesController::editarCliente');
$router->get('/cliente/excluir/{id}', 'ProjetoPHP\Controller\ClientesController::excluirCliente');
//Controladores Clientes Controller


//Controladores Produtos Controller
$router->get('/produto/novo', 'ProjetoPHP\Controller\ProdutosController::abrirFormularioInserir');
$router->post('/produto/inserir', 'ProjetoPHP\Controller\ProdutosController::inserirProduto');
$router->get('/produtos', 'ProjetoPHP\Controller\ProdutosController::abrirListaProdutos');
$router->get('/produto/alterar/{id}', 'ProjetoPHP\Controller\ProdutosController::abrirFormularioAlterar');
$router->post('/produto/editar/{id}', 'ProjetoPHP\Controller\ProdutosController::editarProduto');
$router->get('/produto/excluir/{id}', 'ProjetoPHP\Controller\ProdutosController::excluirProduto');
//Controladores Produtos Controller

$router->get("/home", 'ProjetoPHP\Controller\HomeController::exibirHome');

//Adicionar as rotas validas acima

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Pagina não encontrada!!";
    die();
}

echo $result($router->getParams());
