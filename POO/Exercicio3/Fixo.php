<?php

class Fixo extends Telefone
{
    public $custoMin;

    public function __construct($ddd, $numTelefone,$custoMin){parent::__construct($ddd,$numTelefone);       
        $this->setCustoMin($custoMin);
    }

    public function CalculaCusto($tempLigacao){
        $valorLigacao = ($tempLigacao * $this->custoMin);
        return $valorLigacao;
    }

    public function Mostrar(){
        parent::Mostrar();
        echo "</br>Custo Minuto:  {$this->custoMin}</br>";
    }

    public function getCustoMin()
    {
        return $this->custoMin;
    }
    public function setCustoMin($custoMin)
    {
        $this->custoMin = $custoMin;
    }
}
