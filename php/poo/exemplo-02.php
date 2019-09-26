<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    // Modelo
    public function GetModelo() {

        return $this->modelo;
    }

    public function SetModelo($modelo) {

        $this->modelo = $modelo;
    }

    // Motor
    public function GetMotor():float {

        return $this->motor;
    }

    public function SetMotor($motor) {

        $this->motor = $motor;
    }

    // Ano
    public function GetAno():int {

        return $this->ano;
    }

    public function SetAno($ano) {

        $this->ano = $ano;
    }

    public function Exibir() {

        return array(
            "modelo"=>$this->GetModelo(),
            "motor"=>$this->GetMotor(),
            "ano"=>$this->GetAno()
        );
    }

}

$corsa = new Carro();

$corsa->SetModelo("Siena");
$corsa->SetMotor(1.0);
$corsa->SetAno(1999);

var_dump($corsa->Exibir());



?>