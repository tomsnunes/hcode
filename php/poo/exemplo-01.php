<?php

class Pessoa {

    public $nome; //Atributo

    public function falar(){ //Metodo

        return "O meu nome é ".$this->nome;
    }

}

$person = new Pessoa();

$person->nome = "Wellington";

echo ($person->falar());

?>