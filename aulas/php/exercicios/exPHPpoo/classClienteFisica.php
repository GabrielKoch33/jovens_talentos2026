<?php 
require_once 'classCliente.inc';

class ClienteFisica extends Cliente {
    
    private $cpf;

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}
?>