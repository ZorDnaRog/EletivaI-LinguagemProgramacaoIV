<?php


namespace ProjetoPHP\Controller;


class Controller_05
{
    public static function exibir()
    {
        require_once("../src/View/exercicio5.php");
    }

    public static function exibirResultado()
    {
        require_once("../src/View/exercicio5.php");

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $soma = $nota1 + $nota2 + $nota3 + $nota4;
        $média = $soma / 4;
        if ($média >= 7) {
            echo "<br>O Aluno foi aprovado no curso!<br><br>Sua média foi: " . $média;
        } else {
            echo "<br>O Aluno foi reprovado no curso!<br><br>Sua média foi: " . $média;
        }
    }
}
