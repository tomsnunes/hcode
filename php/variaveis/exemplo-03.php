<?php

//Tipos de Dados

//Tipos Básico

//String
$nome = "Hcode";
$site = 'www.hcode.com.br';

//Integer
$ano = 1990;

//Float
$salario = 5500.99;

//Boolean
$bloquedo = false;

//Tipos Compostos

//Array
$frutas1 = ["abacaxi","laranja","manga","morango"];
$frutas2 = array("abacaxi","laranja","manga","morango");

echo $frutas1[0];
echo "<br/>";
echo $frutas2[2];
echo "<br/>";

//Object
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br/>";

//Tipos Especiais
//Resource
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);
echo "<br/>";

//Null
$nulo = Null;
$vazio = "";
var_dump($nulo);
?>