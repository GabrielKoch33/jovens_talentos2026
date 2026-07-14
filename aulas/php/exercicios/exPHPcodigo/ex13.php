<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex13.php" method="post">
        <label for="number">Escreva 10 números (separe usando vírgula)</label>
        <input type="text" name="number" id="number">

        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['number'])){
            $sNum = trim($_POST['number']);
            if (!$sNum){
                echo 'Nada para exibir';
            } else {
                $aNumbers = explode(",",$sNum);
                foreach ($aNumbers as &$iArrayValues){
                    $iArrayValues (int)*= 2;
                }
            unset($iArrayValues);# & passa o array por referencia, unset encerra a referencia
            print_r($aNumbers);            
            }
        }
    }
    ?>
</body>
</html>