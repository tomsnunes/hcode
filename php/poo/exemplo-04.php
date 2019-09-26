<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a,$b,$c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __toString(){

        return $this->logradouro. ", " . $this->numero . " - " . $this->cidade;
    }

    public function __destruct() {

        var_dump("Destruído");
    }

}

$meuEndereco = new Endereco("Rua 14 JW",288,"Rio Claro");

var_dump($meuEndereco);

echo "<br>";

echo ($meuEndereco);

echo "<br>";

unset($meuEndereco);

?>