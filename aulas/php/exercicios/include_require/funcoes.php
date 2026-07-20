<?php
function montaSelect($aRefArray,$sRefCampo,$bRefEscolha){
    echo "<select name='" . $sRefCampo . "'>";
    if ($bRefEscolha == 'true') {
        foreach ($aRefArray as $iIndex => $sFruta) {
            echo "<option value='" . $iIndex . "'>" . $sFruta . "</option>";
        }
    } else {
        foreach ($aRefArray as $sFruta) {
            echo "<option value='" . $sFruta . "'>" . $sFruta . "</option>";
        }
    }
    echo "</select>";
}

function montaRadio($aRefArray, $sRefCampo, $bRefEscolha, $mElementoPadrao) {
    if ($bRefEscolha == 'true') {
        foreach ($aRefArray as $iIndex => $sFruta) {
            $sChecked = ($iIndex == $mElementoPadrao) ? "checked" : "";
            echo "<input type='radio' id='" . $sRefCampo . $iIndex . "' name='" . $sRefCampo . "' value='" . $iIndex . "' " . $sChecked . ">";
            echo "<label for='" . $sRefCampo . $iIndex . "'> " . $sFruta . " </label>";
        }
    } else {
        foreach ($aRefArray as $iIndex => $sFruta) {
            $sChecked = ($sFruta == $mElementoPadrao) ? "checked" : "";
            echo "<input type='radio' id='" . $sRefCampo . $iIndex . "' name='" . $sRefCampo . "' value='" . $sFruta . "' " . $sChecked . ">";
            echo "<label for='" . $sRefCampo . $iIndex . "'> " . $sFruta . " </label>";
        }
    }
};

function montaCheckbox($aRefArray, $sRefCampo, $bRefEscolha, $mElementoPadrao) {
    if ($bRefEscolha == 'true') {
        foreach ($aRefArray as $iIndex => $sFruta) {
            $sChecked = ($iIndex == $mElementoPadrao) ? "checked" : "";
            echo "<input type='checkbox' id='" . $sRefCampo . $iIndex . "' name='" . $sRefCampo . "' value='" . $iIndex . "' " . $sChecked . ">";
            echo "<label for='" . $sRefCampo . $iIndex . "'> " . $sFruta . " </label>";
        }
    } else {
        foreach ($aRefArray as $iIndex => $sFruta) {
            $sChecked = ($sFruta == $mElementoPadrao) ? "checked" : "";
            echo "<input type='checkbox' id='" . $sRefCampo . $iIndex . "' name='" . $sRefCampo . "' value='" . $sFruta . "' " . $sChecked . ">";
            echo "<label for='" . $sRefCampo . $iIndex . "'> " . $sFruta . " </label>";
        }
    }
}

function montaInput($sCampoNome, $sCampoTipo, $iQuantidadeInputs) {
    for ($i = 1; $i <= $iQuantidadeInputs; $i++) {
        echo "<label for='" . $sCampoNome . $i . "'>" . $sCampoNome . "</label><br>";
        echo "<input type='" . $sCampoTipo . "' name='" . $sCampoNome . $i . "' id='" . $sCampoNome . $i . "'><br><br>";
    }
};
?>