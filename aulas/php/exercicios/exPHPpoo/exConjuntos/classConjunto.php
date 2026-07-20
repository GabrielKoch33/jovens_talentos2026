<?php

class Conjunto {

    private $arrayConjunto = [];


    public function getConjunto(){
        return $this->arrayConjunto;
    }

    public function addElemento($sElemento){
        if (in_array($sElemento, $this->arrayConjunto)){
            return FALSE;
        } else {
            $this->arrayConjunto[] = $sElemento;
            return TRUE;
        }
    }

    public function existElemento($sElemento){
        if (in_array($sElemento, $this->arrayConjunto)){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function uniao($oArrayConjunto){
        // adiciona os elementos do vetor instanciado
        $tempArray = [];
        foreach ($this->arrayConjunto as $sElementoA){
            if (!in_array($sElementoA, $tempArray)){
                $tempArray[] = $sElementoA;
            }
        }
    

        // adiciona os elementos do vetor passado por ref
        $aRefArrayConjunto = $oArrayConjunto->getConjunto();
        foreach($aRefArrayConjunto as $sElementoB){
            if (!in_array($sElementoB, $tempArray)){
                $tempArray[] = $sElementoB;
            }
        }

        // adiciona os elementos unidos ao novo objeto
        // através do metodo addElemento()
        $oObjUniao = new Conjunto();
        foreach($tempArray as $sElemento){
            $oObjUniao->addElemento($sElemento);
        }
        return $oObjUniao;
    }

    public function inter($oArrayConjunto){
        $aRefArrayConjunto = $oArrayConjunto->getConjunto();
        $tempArray = [];
        foreach($this->arrayConjunto as $sElementoA){
            foreach($aRefArrayConjunto as $sElementoB){
                if($sElementoA == $sElementoB && !in_array($sElementoA,$tempArray)){
                    $tempArray[] = $sElementoA;
                }
            }
        }
        $oObjInter = new Conjunto();
        foreach($tempArray as $sElemento){
            $oObjInter->addElemento($sElemento);
        }
        return $oObjInter;
    }

    public function menos($oArrayConjunto){
        $aRefArrayConjuntoB = $oArrayConjunto->getConjunto();
        $tempArray = [];
        foreach($this->arrayConjunto as $sElementoA){
            if(!in_array($sElementoA,$aRefArrayConjuntoB)){
                $tempArray[] = $sElementoA;
            }
        }
        $oObjMenos = new Conjunto();
        foreach($tempArray as $sElemento){
            $oObjMenos->addElemento($sElemento);
        }
        return $oObjMenos;        
    }
}
?>