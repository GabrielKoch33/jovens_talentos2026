<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex04.php" method="post">
        <label for="vlFrase">Insira uma frase: </label>
        <input type="text" name="vlFrase" id="vlFrase"><br>
        <label for="vlChar">Insira um caractere para contar suas ocorrencias: </label>
        <input type="text" name="vlChar" id="vlChar">
        <input type="submit"><br><br>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['vlFrase']) && $_POST['vlChar'] !== ''){
                $cCaractere = $_POST['vlChar'];
                $sFraseUser = $_POST['vlFrase'];
                $iTamanho = strlen($sFraseUser);
                $iOcorrencias = 0;

                for ($i = 0; $i <= $iTamanho-1; $i++){
                    if ($sFraseUser[$i] == $cCaractere){
                        $iOcorrencias += 1;
                    }
                }
            echo "Nº de ocorrências: ". $iOcorrencias;
            }
        }
    ?>
</body>
</html>
