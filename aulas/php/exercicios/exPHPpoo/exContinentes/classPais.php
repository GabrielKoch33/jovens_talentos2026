<?php

class Pais {

    private $iso              = '';
    private $nome             = '';
    private $populacao        = 0;
    private $dimensao         = 0;
    private $paisesFronteiras = [];

    public function __construct($varISO,$varNome,$varDimensao){
        $this->iso      = $varISO;
        $this->nome     = $varNome;
        $this->dimensao = $varDimensao;
    }

    public function setIso($varIso){
        $this->populacao = $varIso;
    }   

    public function getIso(){
        return $this->populacao;
    }

    public function setNome($varNome){
        $this->nome = $varNome;
    }   

    public function getNome(){
        return $this->nome;
    }

    public function setDimensao($varDimensao){
        $this->dimensao = $varDimensao;
    }   

    public function getDimensao(){
        return $this->dimensao;
    }

    public function setPopulacao($varPopulacao){
        $this->populacao = $varPopulacao;
    }

    public function getPopulacao(){
        return $this->populacao;
    }

    public function getVizinhos(){
        return $this->paisesFronteiras;   
    }

    public function paisAtual($oPais){
        if ($oPais.getIso() == $this->iso){
            return 'São iguais';
        } else {
            return 'São diferentes';
        }
    }

    public function inserePaisFronteira(...$aPaises){
        foreach($aPaises as $paises){
            $this->paisesFronteiras[] = $paises;
        }
    }

    public function removePaisFronteira($sNomePaisFronteira){
        foreach($this->paisesFronteiras as $iIndice => $paises){
            if ($paises == $sNomePaisFronteira){
                unset($this->paisesFronteiras[$iIndice]);
                return $sNomePaisFronteira . ' Foi removido!';
            }
        }
        return 'País não encontrado, verifique o nome';
    }

    public function fazFronteira($sNomePaisFronteira){
        if (in_array($sNomePaisFronteira,$this->paisesFronteiras)){
            return $sNomePaisFronteira.' Faz fronteira com '. $this->nome;
        } else {
            return $sNomePaisFronteira.' Não faz fronteira com '. $this->nome;
        }
    }

    public function calculaDensidadePopulacional(){
        if ($this->getPopulacao() == 0){
            return 'Campo população em branco, define uma população!';
        } else {
            $fDensidadePop =  $this->getPopulacao()/$this->getDimensao();
            return $fDensidadePop;
        }
        
    }

    public function retornaVizinhos($oPais){
        $aListaPaises = $oPais->getVizinhos();

        if (count($aListaPaises) > 40){
            return 'Limite de fronteiras ultrapassado';
        } else {
            return print_r($aListaPaises);
        } 
    }
}
?>