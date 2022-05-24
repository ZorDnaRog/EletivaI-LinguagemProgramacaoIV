<?php


namespace ProjetoPHP\Controller;


class Controller_03
{
    public static function exibir()
    {
        require_once("../src/View/exercicio3.php");
    }

    public static function exibirResultado()
    {
        require_once("../src/View/exercicio3.php");

        $valor = $_POST['valorverificar'];
        $valorparametro = doubleval($valor);
        if ($valorparametro > 10) {
            echo "O valor digitado é maior do que 10";
        } else if ($valorparametro < 10) {
            echo "O valor digitado é menor do que 10";
        } else {
            echo "O valor digitado é o próprio 10";
        }
    }
}
