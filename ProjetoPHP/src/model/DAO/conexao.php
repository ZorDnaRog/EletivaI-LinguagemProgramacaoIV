<?php

use PDO;

namespace Aluno\ProjetoPHP\model\DAO;

class Conexao{

    public static function conectar(){
        return new PDO("mysql:host=localhost;dbname=projetophp","root","");
    }
}