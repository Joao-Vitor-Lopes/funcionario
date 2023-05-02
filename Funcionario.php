<?php
class Funcionario{
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $funcao;
    public $salario;
    public $turno;
    public $email;
    public $salarioBruto;

    public function mostrarDados(){
        
    }

    public function calculaDesconto($desconto){
       $this->salario = $this->salario - $desconto;
    }

    public function mostraSalario(){
        echo "novo Salario";
        $this->mostra($this->salario);
        echo ""
    }

    public function mostra(){
        echo "<br>" .$valor."<br><hr>";
    }
} 

?>