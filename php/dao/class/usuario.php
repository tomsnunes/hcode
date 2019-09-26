<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function GetId_Usuario() {
        return $this->idusuario;
    }

    public function SetId_Usuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function GetLogin_Usuario() {
        return $this->deslogin;
    }

    public function SetLogin_Usuario($deslogin) {
        $this->deslogin = $deslogin;
    }

    public function GetSenha_Usuario() {
        return $this->dessenha;
    }

    public function SetSenha_Usuario($dessenha) {
        $this->dessenha = $dessenha;
    }

    public function GetDtCadastro_Usuario() {
        return $this->dtcadastro;
    }

    public function SetDtCadastro_Usuario($dtcadastro) {
        $this->dtcadastro = $dtcadastro;
    }

    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->SetId_Usuario($row['idusuario']);
            $this->SetLogin_Usuario($row['deslogin']);
            $this->SetSenha_Usuario($row['dessenha']);
            $this->SetDtCadastro_Usuario(new DateTime($row['dtcadastro']));
        }

    }

    public function __toString() {

        return json_encode(array(
            "idusuario"=>$this->GetId_Usuario(),
            "deslogin"=>$this->GetLogin_Usuario(),
            "dessenha"=>$this->GetSenha_Usuario(),
            "dtcadastro"=>$this->GetDtCadastro_Usuario()->format("d/m/Y H:i:s")
        ));
    }
}




?>