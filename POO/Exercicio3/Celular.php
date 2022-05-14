<?php

abstract class Celular extends Telefone{
    public int $custoMin;
    public string $nomeOperadora;  

    public function __construct($ddd, $numTelefone,$custoMin,$nomeOperadora){parent::__construct($ddd,$numTelefone);       
        $this->setCustoMin($custoMin);
        $this->setNomeOperadora($nomeOperadora);
    }

    public function CalculaCusto($tempLigacao){
        $valorLigacao = ($tempLigacao * $this->custoMin);
        return $valorLigacao;
    }

    public function getCustoMin(){
        return $this->custoMin;
    }
    public function setCustoMin($custoMin){
        $this->custoMin = $custoMin;
    }

    public function getNomeOperadora(){
        return $this->nomeOperadora;
    }
    public function setNomeOperadora($nomeOperadora){
        $this->nomeOperadora = $nomeOperadora;
    }
}