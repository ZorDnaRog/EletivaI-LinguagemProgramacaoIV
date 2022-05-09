<?php

class Funcionario{
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($nome, $codigo, $salarioBase)
    {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }
    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido(){
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;
        if ($this->salarioBase > 2000.00){
            $ir = ($this->salarioBase-2000.00)*0.12; 
        }
        return ($this->salarioBase - $inss - $ir);
    }

    public function Mostrar(){
        echo "Nome:  {$this->nome}</br>Codigo:  {$this->codigo}</br>Salário: {$this->salarioBase}</br>";

    }

}
