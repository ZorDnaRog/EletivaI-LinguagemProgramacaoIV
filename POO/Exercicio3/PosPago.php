<?php

class PosPago extends Celular
{
    public function __construct($ddd, $numTelefone, $custoMin, $tempLigacao, $nomeOperadora)
    {
        parent::__construct($ddd, $numTelefone, $custoMin, $tempLigacao, $nomeOperadora);
    }

    public function CalculaCusto($tempLigacao)
    {
        return "R$ " . number_format(($tempLigacao * ($this->custoMin - ($this->custoMin * 10 / 100))), 2, ',', '.');
    }
}
