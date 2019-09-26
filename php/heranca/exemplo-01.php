<?php

class Documento {

    private $numero;

    public function GetNumero(){

        return $this->numero;
    }

    public function SetNumero($numero){

        $this->numero = $numero;
    }

}  

class CPF extends Documento {

    public function validar():bool {

        $numeroCPF = $this->GetNumero();

        // Validação CPF
        return true;
    }
}

$doc = new CPF();

$doc->SetNumero(12345678910);

var_dump($doc->validar());

echo "<br>";

echo $doc->GetNumero();

?>