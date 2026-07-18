<?php

class Continente {

    private $nomeContinente = '';
    private $listaPaises    = [];

    public function __construct($sNome){
        $this->nomeContinente = $sNome;
    }

    public function adicionaPais($oObjPais){
        $this->listaPaises[] = $oObjPais;
        return $oObjPais->getNome(). ' adicionado!';
    }

    public function dimensaoTotal(){
        $fTotDimensao = 0;
        foreach($this->listaPaises as $pais){
            $fTotDimensao += $pais->getDimensao();
        }
        return $fTotDimensao;
    }

    public function populacaoTotal(){
        $fTotPopulacao = 0;
        foreach($this->listaPaises as $pais){
            $fTotPopulacao += $pais->getPopulacao();
        }
        return $fTotPopulacao; 
    }
    
    public function densidadeTotal(){
        return $fTotDensidade = $this->populacaoTotal() / $this->dimensaoTotal();
    }

    public function maiorPopulacao(){
        $fMaiorPop = $this->listaPaises[0]->getPopulacao();
        $sNomeMaiorPop = '';
        foreach($this->listaPaises as $oObjPais){
            if($oObjPais->getPopulacao() > $fMaiorPop){
                $fMaiorPop = $oObjPais->getPopulacao();
                $sNomeMaiorPop = $oObjPais->getNome();
            }
        }
        return /*'Maior População - '.$sNomeMaiorPop.'-'.*/$fMaiorPop;
    }

    public function menorPopulacao(){
        $fMenorPop = $this->listaPaises[0]->getPopulacao();
        $sNomeMenorPop = '';
        foreach($this->listaPaises as $oObjPais){
            if($oObjPais->getPopulacao() < $fMenorPop){
                $fMenorPop = $oObjPais->getPopulacao();
                $sNomeMenorPop = $oObjPais->getNome();
            }
        }
        return /*'Menor População - '.$sNomeMenorPop.'-'.*/ $fMenorPop;
    }

    public function maiorTerritorio(){
        $fMaiorTerr     = $this->listaPaises[0]->getDimensao();
        $sNomeMaiorTerr = '';
        foreach($this->listaPaises as $oObjPais){
            if($oObjPais->getDimensao() > $fMaiorTerr){
                $fMaiorTerr     = $oObjPais->getDimensao();
                $sNomeMaiorTerr = $oObjPais->getNome();
            }
        }
        return $fMaiorTerr;
    }

    public function menorTerritorio(){
        $fMenorTerr     = $this->listaPaises[0]->getDimensao();
        $sNomeMenorTerr = '';
        foreach($this->listaPaises as $oObjPais){
            if($oObjPais->getDimensao() < $fMenorTerr){
                $fMenorTerr     = $oObjPais->getDimensao();
                $sNomeMenorTerr = $oObjPais->getNome();
            }
        }
        return $fMenorTerr;
    }

    public function DiffTamTerr(){
        return $this->maiorTerritorio() - $this->menorTerritorio();
    }
}
?>