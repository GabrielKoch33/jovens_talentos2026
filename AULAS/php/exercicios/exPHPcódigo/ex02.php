<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex02.php" method="post">
    <label for="vlInicio">Insira o valor inicial de escrita: </label>
    <input type="number" name="vlInicio" id="vlInicio"><br>
    <label for="vlFim">Insira o valor final do intervalo: </label>
    <input type="number" name="vlFim" id="vlFim">
    <input type="submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['vlInicio']) && isset($_POST['vlFim'])){
            $iValInicio = $_POST['vlInicio'];
            $iValFinal = $_POST['vlFim'];
            $iContador = $iValInicio + 1;

            while ($iContador < $iValFinal){
                echo $iContador. '<br/>';
                $iContador += 1;
            };  
        }
    }
?>
</body>
</html>


