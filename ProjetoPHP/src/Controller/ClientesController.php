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
            return "Inserido com sucesso!!";
        } else {
            return "Erro ao inserir!!";
        }
    }
}
