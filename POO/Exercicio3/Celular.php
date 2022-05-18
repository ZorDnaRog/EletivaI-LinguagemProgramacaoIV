<?php

abstract class Celular extends Telefone
{
    public float $custoMin;
    public float $tempLigacao;
    public string $nomeOperadora;


    public function __construct($ddd, $numTelefone, $custoMin, $tempLigacao, $nomeOperadora)
    {
        parent::__construct($ddd, $numTelefone);
        $this->setCustoMin($custoMin);
        $this->setNomeOperadora($nomeOperadora);
        $this->setTempLigacao($tempLigacao);
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
        echo "</br>";
        echo "Operadora: {$this->nomeOperadora}";
    }

    public function getCustoMin()
    {
        return $this->custoMin;
    }
    public function setCustoMin($custoMin)
    {
        $this->custoMin = $custoMin;
    }

    public function getNomeOperadora()
    {
        return $this->nomeOperadora;
    }
    public function setNomeOperadora($nomeOperadora)
    {
        $this->nomeOperadora = $nomeOperadora;
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
