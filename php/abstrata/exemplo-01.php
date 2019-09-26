<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veiculo acelerou até ".$velocidade." km/h.";
    }

    public function frenar($velocidade){
        echo "O veiculo reduziu para ".$velocidade." km/h.";
    }

    public function trocarMarcha($marcha){
        echo "O veiculo mudou para a ".$marcha." marcha.";
    }

}   

class DelRey extends Automovel {

    public function empurrar(){


    }

}

$carro = new DelRey();

echo "<br>";

$carro->acelerar(200);

echo "<br>";

$carro->frenar(120);

echo "<br>";

$carro->trocarMarcha(5);

?>