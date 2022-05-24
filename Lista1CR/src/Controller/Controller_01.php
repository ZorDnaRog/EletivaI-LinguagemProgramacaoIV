<?php


namespace ProjetoPHP\Controller;


class Controller_01
{
    public static function exibir()
    {
        require_once("../src/View/exercicio1.php");
    }

    public static function exibirResultado()
    {
        require_once("../src/View/exercicio1.php");

        $pagamento = $_POST["valorpago"];
        $preco = $_POST["precoproduto"];
        if ($pagamento - $preco < 0) {
            echo "Compra cancelada, o valor pago é menor que o valor do produto!";
        } else if ($pagamento - $preco > 0) {
            echo "Valor do Troco: " . $pagamento - $preco;
        } else {
            echo "O valor pago é o mesmo do produto. Não a troco para receber!";
        }
    }
}
