<?php
function montaSelect($aRefArray,$sRefCampo,$bRefEscolha){
    echo "<select name=". $sRefCampo ."/>";
    if ($bRefEscolha == 'true'){
        foreach($aRefArray as $iIndex => $sFruta){
            echo "<option value=".$iIndex.">".$sFruta."</option>";
        }
    } else {
        foreach($aRefArray as $sFruta){
            echo "<option value=".$sFruta.">".$sFruta."</option>";
        }
    }
    echo "</select>";
}

function montaRadio($aRefArray,$sRefCampo,$bRefEscolha,$mElementoPadrao){

};
function montaCheckbox($aRefArray,$sRefCampo,$bRefEscolha,$mElementoPadrao){

};

?>