<?php

namespace Aluno\ProjetoPHP\Controller;

use Aluno\ProjetoPHP\model\DAO\ClienteDAO;
use Aluno\ProjetoPHP\model\Entity\Clientes;

class ClientesController
{
    public static function abrirFormularioInserir()
    {
        require_once "../src/View/inserir_cliente.php";
    }

    public static function inserirCliente()
    {
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClienteDAO();
        if ($dao->inserir($cliente)) {
            return "Inserido com sucesso!!";
        } else {
            return "Erro ao inserir!!";
        }
    }
}
