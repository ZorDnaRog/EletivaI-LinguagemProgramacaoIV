<?php


namespace ProjetoPHP\Controller;


class ExercicioController
{
    public static function exibir()
    {
        require_once("../src/View/exemplo.php");
    }

    public static function exibirResultado()
    {
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $sum = $value1 + $value2;

        require_once("../src/View/exemplo.php");
    }
}
