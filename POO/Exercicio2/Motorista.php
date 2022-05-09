<?php

class Motorista extends Funcionario{
    private $carteira;


    public function __construct($nome, $codigo, $salarioBase, $carteira)
    {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
        $this->setCarteira($carteira);
    }

    public function getCarteira(){
        return $this->carteira;
    }
    public function setCarteira($carteira){
        $this->carteira = $carteira;
    }

    public function Mostrar(){
        echo "Nome: {$this->getNome()}</br>Codigo:  {$this->getCodigo()}</br>Salário:    {$this->getSalarioBase()}</br>Carteira: {$this->carteira}</br>";

    }

}
