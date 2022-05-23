<?php

namespace ProjetoPHP\model\DAO;

use ProjetoPHP\model\Entity\Clientes;
use ProjetoPHP\model\Entity\Produto;

class ProdutoDAO{

    public function inserir(Produto $p){
        try{
            $sql = "INSERT INTO `produto`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";

        }catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produto $p){
        try{
            $sql = "UPDATE `produto` SET `nome`= :nome,`descricao`= :descricao,`valor`= :valor WHERE id = :id";

        }catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produto` WHERE id = :id";

        }catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produto";

        }catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produto WHERE id = :id";

        }catch(\Exception $e){
            return false;
        }
    }
}
