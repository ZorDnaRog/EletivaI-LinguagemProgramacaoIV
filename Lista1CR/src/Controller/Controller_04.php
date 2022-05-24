<?php


namespace ProjetoPHP\Controller;


class Controller_04
{
    public static function exibir()
    {
        require_once("../src/View/exercicio4.php");
    }

    public static function exibirResultado()
    {
        require_once("../src/View/exercicio4.php");

        $numero = $_POST['verificarnumero'];
        if ($numero < 0) {
            echo "O valor digitado é negativo";
        } else if ($numero > 0) {
            echo "O valor digitado é positivo";
        } else {
            echo "O valor digitado é Zero";
        }
    }
}
