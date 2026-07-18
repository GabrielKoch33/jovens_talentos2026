<?php

class Pessoa{

    private $nome         = '';
    private $antecessores = [];

    public function __construct($sNome,$sNomeMae,$sNomePai){
        $this->nome = $sNome;
        $this->antecessores['mae'] = $sNomeMae;
        $this->antecessores['pai'] = $sNomePai;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getAntecessores(){
        return $this->antecessores;
    }

    public function samePerson($oPessoa2){
        // pessoa 2 será instância de Pessoa
        // 1 - Possuem o mesmo nome?
        // 2 - Pessoa1 e Pessoa2 possuem o mesmo valor no campo 'mae'?
        if ($this->getNome() == $oPessoa2->getNome()){
            if ($this->getAntecessores()['mae'] == $this->getAntecessores()['mae']){
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function saoIrmas($oPessoaParametro){
        // pessoaParametro é um objeto criado a partir da instancia de outra pessoa
        if ($this->antecessores['mae'] == $oPessoaParametro->getAntecessores()['mae']){
            return TRUE;
        } else {
            return FALSE;
        }
    }   
}

?>