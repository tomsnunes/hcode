<?php


class Cadastro {

    private $nome;
    private $email;
    private $senha;

    public function GetNome():string
    {
        return $this->nome;
    }

    public function GetEmail():string
    {
        return $this->email;
    }

    public function GetSenha():string
    {
        return $this->senha;
    }

    public function SetNome($nome)
    {
        $this->nome = $nome;
    }

    public function SetEmail($email)
    {
        $this->email = $email;
    }

    public function SetSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString(){
        return json_encode(array(
            'nome'=>$this->GetNome(),
            'email'=>$this->GetEmail(),
            'senha'=>$this->GetSenha()
        ));
    }
}