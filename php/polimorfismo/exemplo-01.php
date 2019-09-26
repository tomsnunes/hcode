<?php

# Polimorfismo

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}    

class Cachorro extends Animal {

    public function falar(){

        return "Late";
    }
}

class Gato extends Animal {

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
$garfield = new Gato();
$bird = new Passaro();

echo "<br>";

echo $pluto->falar();

echo "<br>";

echo $garfield->falar();

echo "<br>";

echo $bird->falar();

echo "<br>";

echo $bird->mover();


?>