<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->SetNome("Wellington Nunes");
$cad->SetEmail("tomsnunes@gmail.com");
$cad->SetSenha("123456");

$cad->registrarVenda();

?>