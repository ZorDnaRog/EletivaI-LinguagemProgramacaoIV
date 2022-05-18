<?php

class Fixo extends Telefone
{
    public float $custoMin;
    public float $tempLigacao;

    public function __construct($ddd, $numTelefone, $custoMin, $tempLigacao)
    {
        parent::__construct($ddd, $numTelefone);
        $this->setCustoMin($custoMin);
        $this->setTempLigacao($tempLigacao);
    }

    public function CalculaCusto($tempLigacao)
    {
        return "R$ " . number_format(($this->tempLigacao * $this->custoMin), 2, ',', '.');
    }


    public function Mostrar()
    {
        parent::Mostrar();
        echo "</br>";
        echo "Custo Minuto: R$ ".number_format(($this->custoMin), 2, ',', '.');;
        echo "</br>";
        echo "Tempo da Ligação:  {$this->tempLigacao}";
        echo "</br>";
        echo "Custo da Ligação: {$this->CalculaCusto($this->tempLigacao)}";
    }

    public function getCustoMin()
    {
        return $this->custoMin;
    }
    public function setCustoMin($custoMin)
    {
        $this->custoMin = $custoMin;
    }

    public function getTempLigacao()
    {
        return $this->tempLigacao;
    }
    public function setTempLigacao($tempLigacao)
    {
        $this->tempLigacao = $tempLigacao;
    }
}
