<?php

class Servente extends Funcionario{

    public function __construct($nome, $codigo, $salarioBase)
    {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
    }

    public function CalculoInsalubridade(){
        $res = $this->getSalarioBase() * 0.05;
        $res = $this->getSalarioBase() + $res;
        return $res;
    }

}
