<?php

# Transação

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","supersoft**");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

# Cancela a transação
//$conn->rollBack();

# Confirma a transação
$conn->commit();

echo "Deleted";

?>