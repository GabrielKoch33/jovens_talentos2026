<?php
class Calculo{

    const COMISSAO = 1 + (15/100);
    const TAXA_DISTRIBUIDOR = 1 + (28/100);
    const TAXA_IMPOSTOS = 1 + (45/100);

    public function maiorValor($iNum1, $iNum2){
        if ($iNum1 > $iNum2){
            return $iNum1 . ' é maior que ' . $iNum2;
        } elseif ($iNum2 > $iNum1){
            return $iNum2 . ' é maior que ' . $iNum1;
        } else {
            return 'ambos os números são iguais';
        }
    }

    public function calculaAreaTriangulo($fBase, $fAltura){
        $fArea = ($fBase * $fAltura) / 2;
        return $fArea;
    }

    public function valorAoCubo($iNum){
        return pow($iNum, 3);
    }

    # 7 3 5
    public function numCrescentes($iNum1, $iNum2, $iNum3){
        $aArr = [$iNum1, $iNum2, $iNum3];

        for ($i = 0; $i < count($aArr); $i++){
            $iIndiceMenorValor = $i;
            for ($j = $i + 1; $j < count($aArr); $j++){
                if ($aArr[$j] < $aArr[$iIndiceMenorValor]){
                    $iIndiceMenorValor = $j;
                }
            }
            $temp = $aArr[$i];
            $aArr[$i] = $aArr[$iIndiceMenorValor];
            $aArr[$iIndiceMenorValor] = $temp;
        }
        return $aArr;
    }

    public function mediaAprovado($fNota1, $fNota2){
        $fMedia = ($fNota1 + $fNota2) / 2;
        if ($fMedia >= 5.0){
            return 'Aprovado!';
        } else {
            return 'Reprovado!';
        }
    }

    public function comparaSoma($iValorA, $iValorB, $iValorC){
        $iSomaAB = $iValorA + $iValorB;
        if ($iSomaAB > $iValorC){
            return 'A + B é maior que C';
        } elseif ($iSomaAB < $iValorC){
            return 'A + B é menor que C';
        } else {
            return 'A + B é igual a C';
        }
    }

    public function operacoes($iNum1, $iNum2){
        $aArrOperacoes = [];

        $iSoma = $iNum1 + $iNum2;
        $iSubtr = $iNum1 - $iNum2;
        $iMult = $iNum1 * $iNum2;

        if ($iNum2 == 0){
            echo 'Divisões por zero não são permitidas!';
            array_push($aArrOperacoes, $iSoma, $iSubtr, $iMult);
            return $aArrOperacoes;
        } else {
            $fDiv = $iNum1 / $iNum2;
            array_push($aArrOperacoes, $iSoma, $iSubtr, $iMult, $fDiv); // corrigido: era $iDiv (não existia)
            return $aArrOperacoes;
        }
    }

    public function folhaVendedor($sNomeVendedor, $fSalarioFixo, $fTotVendas){
        $fSalarioFinal = $fSalarioFixo + ($fTotVendas * self::COMISSAO);
        return 'Vendedor: ' . $sNomeVendedor . ' Salário Fixo: ' . $fSalarioFixo . ' Salário Final: ' . $fSalarioFinal;
    }

    public function precoCarro($fCustoFabrica){
        $fCustoFabrica_Imposto = $fCustoFabrica * self::TAXA_IMPOSTOS;
        $fPrecoFinalConsumidor = $fCustoFabrica_Imposto * self::TAXA_DISTRIBUIDOR;
        return $fPrecoFinalConsumidor;
    }

    public function distanciaCordenadas($iX1, $iY1, $iX2, $iY2){
        $fDistancia = sqrt((($iX2 - $iX1) ** 2) + (($iY2 - $iY1) ** 2));
        return $fDistancia;
    }

}
?>