<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l2ex3.php" method="post">
        <label for="nomes">Nomes (separe por virgula): </label>
        <input type="text" name="nomes" id="nomes">
        <button type="submit"> Calcular</button>
        <?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['nomes'])){
                $sNomes = trim($_POST['nomes']);
                if ($sNomes){
                    $aNomes = explode(',', $sNomes);#separa por ,
                    $aNomes = array_map('trim', $aNomes);# remove espacos em branco dentro de cada item do vetor
                    sort($aNomes);# ordena o vetor (não retorna ele ordenado diretamente, apenas a referencia)
                    print_r($aNomes);
                } else {
                    echo "nada para exibir";
                }
            }
         }
        ?>
    </form>
</body>
</html>