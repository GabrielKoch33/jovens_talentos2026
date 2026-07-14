<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l2ex1.php" method="post">
        <label for="unitconta">Quantas unidades foram gastas?</label>
        <input type="number" name="unitconta" id="unitconta">
        <button type="submit"> Calcular</button>
        <?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['unitconta'])){
                $fUnidades = floatval($_POST['unitconta']);
                if ($fUnidades <= 50){
                    $fTotalConta = $fUnidades * 3.50;
                } elseif ($fUnidades <= 150){
                    $fTotalConta = $fUnidades * 4.00;
                } elseif ($fUnidades <= 250){
                    $fTotalConta = $fUnidades * 5.30;
                } else {
                    $fTotalConta = $fUnidades * 6.70;
                }   
                echo "Valor a pagar: ". $fTotalConta;
            }
         }
        ?>
    </form>
</body>
</html>