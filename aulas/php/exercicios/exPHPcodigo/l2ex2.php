<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l2ex2.php" method="post">
        <label for="mesAno">Digite um nº de 1 a 12</label>
        <input type="number" name="mesAno" id="mesAno">
        <button type="submit"> Calcular</button>
        <?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['mesAno'])){
                $aMeses = [
                1 => 'Janeiro',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro'
                ];
                $iNumMes = $_POST['mesAno'];
                echo "Mês: ". $aMeses[$iNumMes];
            }
         }
        ?>
    </form>
</body>
</html>