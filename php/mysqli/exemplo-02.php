<?php

$conn = new mysqli("localhost", "root", "supersoft**", "dbphp7");

if ($conn->connect_error) {

    echo "Error: Falha na Conexão do Banco de Dados";
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}

echo json_encode($data);


?>