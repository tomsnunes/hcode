<?php

# Atualização de Dados

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","supersoft**");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "tomsnunes";
$password = "rootmastero**";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

?>