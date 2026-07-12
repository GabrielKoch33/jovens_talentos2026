<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex03.php" method="post">
        <label for="vlStr">Insira uma String: </label>
        <input type="text" name="vlStr" id="vlStr">
        <input type="submit"><br><br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['vlStr']) && $_POST['vlStr'] !== ''){

                $sString = $_POST['vlStr'];
                $sNomeFormatado = str_replace(" ","",$sString);

                for($iContador = 1; $iContador < strlen($sNomeFormatado); $iContador++){
                    
                };
            echo "Total de caracteres: ". $iContador .'<br/>';
            }
        }
    ?>
</body>
</html>


