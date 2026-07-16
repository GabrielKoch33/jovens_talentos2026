<?php 
require_once 'classCliente.php';

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