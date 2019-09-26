<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
}

class Programador extends Pessoa
{
    public function VerDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

        echo get_class($this);
    }
}


$objeto = new Programador();

//echo $objeto->nome . "<br>";

$objeto->VerDados();

?>