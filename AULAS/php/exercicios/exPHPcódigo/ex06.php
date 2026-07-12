<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex06.php" method="post">
        <label for="lado1">Insira um lado do retangulo: </label>
        <input type="number" name="lado1" id="lado1">
        <label for="lado2">Insira o segundo lado do retangulo: </label>
        <input type="number" name="lado2" id="lado2">
        <input type="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['lado1']) && isset($_POST['lado2'])){
                $iLado1 = $_POST['lado1'];
                $iLado2 = $_POST['lado2'];
                $iPerimeter = ($iLado1 * 2)+($iLado2 * 2);

                echo $iPerimeter;
            }
        }
    ?>
</body>
</html>