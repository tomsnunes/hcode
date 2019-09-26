<?php

# Inserção de Dados

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","supersoft**");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "tomsnunes";
$password = "rootmaster**";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

?>