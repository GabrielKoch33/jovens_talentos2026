<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contador de palavras</title>
</head>
<body>
    <form action="l2ex6.php" method="post">
        <label for="texto">Digite um texto: </label><br>
        <textarea name="texto" id="texto" rows="6" cols="50"></textarea><br>
        <button type="submit">Contar palavras</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['texto'])){
            $sTexto = trim($_POST['texto']);
            if ($sTexto === ''){
                echo "Nada para exibir";
            } else {
                $iPalavras = str_word_count($sTexto);
                echo "Quantidade de palavras: " . $iPalavras;
            }
        }
    }
    ?>
</body>
</html>