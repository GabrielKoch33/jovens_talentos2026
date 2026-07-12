<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex11.php" method="post">
        <label for="stars">Estrelas</label>
        <select name="stars" id="stars">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit"> Enviar</input>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['stars'])){
                $iQtd = $_POST['stars'];
                $sStar = '✮';
                $sResultado = str_repeat($sStar,$iQtd);
                echo $sResultado;
            }
        }
    ?>
</body>
</html>