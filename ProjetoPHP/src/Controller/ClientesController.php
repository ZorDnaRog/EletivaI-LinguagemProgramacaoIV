<?php

namespace ProjetoPHP\Controller;

use ProjetoPHP\model\DAO\ClientesDAO;
use ProjetoPHP\model\Entity\Clientes;

class ClientesController
{
    public static function abrirFormularioInserir()
    {
        require_once("../src/View/inserir_cliente.php");
    }

    public static function inserirCliente()
    {
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)) {
            $resposta = true;            
        } else {
            $resposta = false;
        }        
        require_once "../src/View/listar_clientes.php";
    }

    public static function abrirListaClientes()
    {
        require_once("../src/View/listar_clientes.php");
    }
}
