<?php

//Escopos de Variáveis

$nome = "Wellington";

function teste() {

	global $nome;
	echo $nome;
	echo "<br>";
}

function teste2() {
	$nome =  "Nunes";
	echo $nome;
}
teste();
teste2();
?>