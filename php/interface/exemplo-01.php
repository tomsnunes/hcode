<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veiculo acelerou até ".$velocidade;
    }

    public function frenar($velocidade){
        echo "O veiculo freiou até ".$velocidade;
    }

    public function trocarMarcha($marcha){
        echo "O veiculo mudou para a ".$marcha." marcha";
    }

}

$carro = new Civic();

?>