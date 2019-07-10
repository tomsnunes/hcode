<?php

//Declaração de Variáveis
$anoNascimento = 1991;
$anoAtual = 2019;
$idade = $anoAtual - $anoNascimento;
$nomeUsuario = "Wellington";
$sobrenomeUsuario = "Nunes";

//Concatenação de Váriaveis
$nomeCompleto = $nomeUsuario . " " . $sobrenomeUsuario;

echo $nomeCompleto;

echo "<br/>";

echo $anoNascimento;

echo "<br/>";

//Variável Não Definida
unset($nomeCompleto);

//Verificação de Definição de Variável
if (isset($nomeCompleto)) {
	echo($nomeCompleto);
}

echo "<br/>";

echo "The user " . $nomeUsuario . " " . $sobrenomeUsuario . " has " . $idade . " years old.";

exit();
?>