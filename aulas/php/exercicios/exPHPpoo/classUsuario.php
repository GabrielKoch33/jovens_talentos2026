<?php
class Usuario{
    
    private $nome;
    private $sobrenome;

    public function setNome($firstname){
        $this->nome = $firstname;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSobrenome($lastname){
        $this->sobrenome = $lastname;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function hello(){
        $username = $this->getNome();
        echo 'Olá usuário:'. $username.'!';
    }


}
?>