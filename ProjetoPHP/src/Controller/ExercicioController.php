<?php


namespace ProjetoPHP\Controller;


class ExercicioController
{
    public static function show(){
        require_once("../src/View/example.php");
    }

    public static function showResult(){
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $sum = $value1 + $value2;

        require_once("../src/View/example.php");
    }
}
