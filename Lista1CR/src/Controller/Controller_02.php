<?php


namespace ProjetoPHP\Controller;


class Controller_02
{
    public static function exibir()
    {
        require_once("../src/View/exercicio2.php");
    }

    public static function exibirResultado()
    {
        require_once("../src/View/exercicio2.php");

        function FormatarMoedaReais($numero)
        {
            return "R$ " . number_format($numero, 2, ',', '.');
        }
        $valor = $_POST['valorporquilo'];
        $qtde = $_POST['qtdeproduto'];
        if ($valor >= 0 && $qtde >= 0) {
            echo "Valor a pagar: " . FormatarMoedaReais(doubleval($valor * $qtde));
        }
    }
}
