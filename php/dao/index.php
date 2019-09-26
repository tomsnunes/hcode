<?php

    require_once "config.php";

    /*
    $sql = new SQL();
    $usuários = $sql->select("SELECT * FROM tb_usuarios");

    echo json_encode($usuários);

    */

    $root = new Usuario();

    $root->loadById(1);

    echo($root);

?>