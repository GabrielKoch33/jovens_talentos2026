<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex15.php" method="post">
        <label for="alfabeto">Digite letras aletórias do alfabeto (pode repetir)</label>
        <input type="text" name="alfabeto" id="alfabeto">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['alfabeto'])){
            $sAlfabeto = trim($_POST['alfabeto']);
            if (!$sAlfabeto){
                echo "nada para exibir";
            } else{
                $iLetraContador = 0;
                $aAlfabeto = explode(",",$sAlfabeto);
                $iTamArray = count($aAlfabeto);
                for ($i = 0; $i < $iTamArray; $i++){
                    if (strtoupper($aAlfabeto[$i]) == "A"){
                        $iLetraContador += 1;
                    }
                }
                echo "Total de ocorrências da letra A: ". $iLetraContador;
            }
        }
    }
    ?>
</body>
</html>