<?php
class PrePago extends Celular
{
    public function __construct($ddd, $numTelefone, $custoMin, $tempLigacao, $nomeOperadora)
    {
        parent::__construct($ddd, $numTelefone, $custoMin, $tempLigacao, $nomeOperadora);
    }

    public function CalculaCusto($tempLigacao)
    {
        return "R$ " . number_format(($this->tempLigacao * ($this->custoMin + ($this->custoMin * 40 / 100))), 2, ',', '.');
    }
}
