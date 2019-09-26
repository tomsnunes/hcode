<?php

$conn = new mysqli("localhost", "root", "supersoft**", "dbphp7");

if ($conn->connect_error) {

    echo "Error: Falha na Conexão do Banco de Dados";
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$login = "user";
$pass = "12345";

$stmt->bind_param("ss", $login, $pass);

$stmt->execute()


?>