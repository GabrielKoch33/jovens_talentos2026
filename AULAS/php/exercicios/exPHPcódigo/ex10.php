<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex10.php" method="post">
        <label for="menordeidade">0 a 17: </label>
        <input type="radio" name="menordeidade" id="menordeidade">
        <br>
        <label for="adulto">18 a 35</label>
        <input type="radio" name="adulto" id="adulto">
        <br>
        <label for="quasevelho">36 a 64</label>
        <input type="radio" name="quasevelho" id="quasevelho">
        <br>
        <label for="idoso">65 a 1000</label>
        <input type="radio" name="idoso" id="idoso">
        <br>

        <input type="submit" name="idade" id="idade">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['menordeidade'])){
                echo "menor de idade";
            } elseif (isset($_POST['adulto'])){
                echo "você está na fase adulta, bora trabalhar mais um pouco";
            } elseif (isset($_POST['quasevelho'])) {
                echo "perto ou já se aposentou";
            } else {
                echo "você é vovô";
            }
        }
    ?>
</body>
</html>