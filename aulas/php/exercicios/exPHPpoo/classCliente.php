<?php 
class Cliente {

    private $nome;
    private $email;
    private $telefone;


    public function exibir(){
        echo 'Nome: '. $this->getNome() .'<br>';
        echo 'Email: '. $this->getEmail() .'<br>';
        echo 'Telefone: '. $this->getTelefone() .'<br>';
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}
?>