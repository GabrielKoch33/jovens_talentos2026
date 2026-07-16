<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorteio</title>
</head>
<body>
    <form action="l2ex4.php" method="post">
        <label for="numero">Escolha um número entre 1 e 10: </label>
        <input type="number" name="numero" id="numero">
        <button type="submit">Sortear</button>
    </form>
    <?php
    define('MIN_NUM', 1);
    define('MAX_NUM', 10);
    define('PREMIO', 'UM BOI GORDO');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['numero'])){
            $iEscolhido = (int)$_POST['numero'];
            $iSorteado = rand(MIN_NUM, MAX_NUM);

            if ($iEscolhido === $iSorteado){
                echo "Você ganhou! Foi sorteado o número:". $iSorteado . ". Prêmio:". PREMIO ;
            } else {
                echo "Você perdeu! Foi sorteado o número:". $iSorteado . ", você escolheu o número". $iEscolhido;
            }
        }
    }
    ?>
</body>
</html>