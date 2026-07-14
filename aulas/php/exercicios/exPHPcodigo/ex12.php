<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex12.php" method="post">
    <label for="raio">Qual o raio do circulo? </label>
    <input type="text" name="raio" id="raio">
    <input type="submit">
    </form>
    <?php
    define("PI",3.14159);
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['raio'])){
            
            $fRaio = floatval($_POST['raio']);
            $fArea = PI * pow($fRaio,2);
            echo "Area do circulo: ". $fArea;
        }
    }
    ?>
</body>
</html>