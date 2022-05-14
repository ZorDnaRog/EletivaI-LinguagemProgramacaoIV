<?php

class PrePago extends Celular{

    public function __construct($custoMin, $nomeOperadora){
        $this->setCustoMin($custoMin);
        $this->setNomeOperadora($nomeOperadora);        
    }

    public function CalculaCusto($tempLigacao){
        $valorLigacao = ($tempLigacao * ($this->custoMin + ($this->custoMin * 0.4)));
        return $valorLigacao;
    }
}