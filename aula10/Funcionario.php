<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salarioBruto;
    public $salarioLiquido;
    public $inss;
    
//    function __construct($nome,$cargo) {
//        this->nome = nome;
//    }
    function __construct($nome,$cargo,$salarioBruto,$inss) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salarioBruto = $salarioBruto;
        $this->inss = $inss;
        $this->calcSalarioLiquido();
    }
    
    function __destruct() {
        echo "Objeto limpo";
    }
    
    public function calcSalarioLiquido(){
        $this->salarioLiquido = $this->salarioBruto-$this->salarioBruto*($this->inss/100);
    }
}
