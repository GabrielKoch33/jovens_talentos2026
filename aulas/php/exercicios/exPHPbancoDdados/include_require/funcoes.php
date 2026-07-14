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
    $sTexto = 'Botão Radio';
    echo "<label for='$sRefCampo'>". $sTexto ."</label>";
    if ($bRefEscolha == 'true'){
        foreach ($aRefArray as $iIndex => $sFruta){ #indice => valor (enumerate)
            if ($iIndex == $mElementoPadrao){
                echo "<input type='radio' id=".$iIndex." name=".$sRefCampo." value=".$iIndex." checked>". $sFruta ."</input>";                
            } else {
                echo "<input type='radio' id=".$iIndex." name=".$sRefCampo." value=".$iIndex.">". $sFruta ."</input>";
            }
        }
    } else {
        foreach ($aRefArray as $iIndex => $sFruta){
            if ($iIndex == $mElementoPadrao){
                echo "<input type='radio' id=".$sFruta." name=".$sRefCampo." value=".$sFruta." checked>". $sFruta ."</input>";                
            } else {
                echo "<input type='radio' id=".$sFruta." name=".$sRefCampo." value=".$sFruta.">". $sFruta ."</input>";   
            }
        }
    }
};
function montaCheckbox($aRefArray,$sRefCampo,$bRefEscolha,$mElementoPadrao){
    $sTexto = 'Botão Radio';
    echo "<label for='$sRefCampo'>". $sTexto ."</label>";

    if ($bRefEscolha == 'true'){
        foreach ($aRefArray as $iIndex => $sFruta){ #indice => valor (enumerate)
            if ($iIndex == $mElementoPadrao){
                echo "<input type='checkbox' id=".$iIndex." name=".$sRefCampo." value=".$iIndex." checked>". $sFruta;                
            } else {
                echo "<input type='checkbox' id=".$iIndex." name=".$sRefCampo." value=".$iIndex.">". $sFruta;
            }
        }
    } else {
        foreach ($aRefArray as $iIndex => $sFruta){
            if ($iIndex == $mElementoPadrao){
                echo "<input type='checkbox' id=".$sFruta." name=".$sRefCampo." value=".$sFruta." checked>". $sFruta;                
            } else {
                echo "<input type='checkbox' id=".$sFruta." name=".$sRefCampo." value=".$sFruta.">". $sFruta;
            }     
        }
    }
};

function montaInput($sCampoNome,$sCampoTipo,$iQuantidadeInputs){
    echo "<label for='".$sCampoNome."'> INPUT </label>";
    for ($i = 1; $i <= $iQuantidadeInputs; $i++ ){
        echo "<input type='".$sCampoTipo."' name='".$sCampoNome.$i."' id='".$sCampoId.$i."'>";
    }
    echo "<input type='submit'>";
};
?>