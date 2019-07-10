<?php
//Variaveis Pré-Definidas
$search = (int)$_GET["s"];
var_dump($search);
echo "<br>";

$query = (int)$_GET["q"];
var_dump($query);
echo "<br>";

$ipAdress = $_SERVER["REMOTE_ADDR"];
var_dump($ipAdress);
echo "<br>";

$scriptName = $_SERVER["SCRIPT_NAME"];
var_dump($scriptName);
?>