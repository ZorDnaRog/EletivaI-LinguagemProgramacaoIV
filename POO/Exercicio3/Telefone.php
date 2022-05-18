<?php

abstract class Telefone
{
    protected int $ddd;
    protected int $numTelefone;
    abstract public function CalculaCusto($tempLigacao);

    public function Mostrar()
    {
        
        echo "</br>";
        echo "DDD:  {$this->ddd}";
        echo "</br>";
        echo "Numero Telefone:  {$this->numTelefone}";
    }

    public function __construct($ddd, $numTelefone)
    {
        $this->setDDD($ddd);
        $this->setNumTelefone($numTelefone);
    }

    public function getDDD()
    {
        return $this->ddd;
    }
    public function setDDD($ddd)
    {
        $this->ddd = $ddd;
    }

    public function getNumTelefone()
    {
        return $this->numTelefone;
    }
    public function setNumTelefone($numTelefone)
    {
        $this->numTelefone = $numTelefone;
    }
}
