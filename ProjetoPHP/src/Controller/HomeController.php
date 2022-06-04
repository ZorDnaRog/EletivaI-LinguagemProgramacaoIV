<?php


namespace ProjetoPHP\Controller;


class HomeController
{
    public static function exibirHome()
    {
        require_once("../src/View/home_page.php");
    }    
}
