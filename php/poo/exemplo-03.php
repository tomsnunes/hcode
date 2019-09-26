<?php

class Documento {

    private $numero;

    public function GetNumero() {

        return $this->numero;
    }

    public function SetNumero($numero){

        //if ($this->ValidarCPF($numero)) {
        if (Documento::ValidarCPF($numero)) {
            $this->numero = $numero;
        } else {
            throw new Exception("CPF Inválido", 1);  
        }
            
    }

    public static function ValidarCPF($cpf):bool{

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;

    }
}

$cpf = new Documento();

$cpf->SetNumero(37201286870);

echo ($cpf->GetNumero());

echo ("<br>");

var_dump(Documento::ValidarCPF(123456));

?>