<?php

#SQL Server
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0", "sa", "supersoft**");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>