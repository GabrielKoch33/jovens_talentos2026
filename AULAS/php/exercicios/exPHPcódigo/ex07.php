<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex07.php" method="post">
        <label for="altura">Altura em M: </label>
        <input type="text" name="altura" id="altura">

        <label for="peso">Peso em KG: </label>
        <input type="text" name="peso" id="peso">

        <button type="submit">Calcule seu IMC:</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['altura']) && isset($_POST['peso'])){
                $fPeso = floatval($_POST['altura']); 
                $fAltura = floatval($_POST['peso']);

                $fIMC = $fPeso / ($fAltura**2);
                
                if ($fIMC > 25){
                    echo "Você está acima do peso!";
                } else
                    echo $fIMC;
                    echo "Você está saudável!";
            }
        }

    ?>
</body>
</html>