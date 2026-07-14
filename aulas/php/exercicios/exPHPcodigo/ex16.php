<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex16.php" method="POST">
        <label for="nome">Seu nome: </label>
        <input type="text" name="nome" id="nome">
        <label for="anoNasc">Ano de nascimento: </label>
        <input type="number" name="anonasci" id="anonasci">
        <label for="salarioHora">Seu salário por hora: </label>
        <input type="text" name="salhora" id="salhora">
        <label for="vlAluguel">Quanto vc paga de aluguel?</label>
        <input type="text" name="vlaluguel" id="vlaluguel">
        <button type="submit">Enviar valores para receita federal</button>

        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome'],$_POST['anonasci'],$_POST['salhora'],$_POST['vlaluguel'])){
                define("HORASMENSAIS",200);
                $sNome = $_POST['nome'];
                $iIdade = (2026 - (int)$_POST['anonasci']);
                $sSalario = str_replace(',','.',$_POST['salhora']);
                $fSalarioMensal = floatval($sSalario) + HORASMENSAIS;
                $sAluguel = str_replace(',','.',$_POST['vlaluguel']);
                $fAluguel = floatval($sAluguel);

                echo "Olá". $sNome .", você tem". $iIdade ."anos, você ganha R$". $fSalarioMensal ."por mês. Sabendo 
                que seu aluguel é de R$".$fAluguel.", lhe resta R$".($fSalario - $fAluguel).".";
            }
        }
        ?>
    </form>

</body>
</html>