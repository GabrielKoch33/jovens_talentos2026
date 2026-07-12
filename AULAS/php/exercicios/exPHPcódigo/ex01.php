 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex01.php" method="post">
        <label for="valor1">Digite um valor numerico: </label>
        <input type="number" name="valor1" id="valor1">
        <input type="submit"><br><br>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST['valor1']) && $_POST['valor1'] !== ''){
                    $iValor = $_POST['valor1'];
                    for ($i = 0; $i <= $iValor; $i++){
                            echo $i. '<br/>';
                        };
            }
        }
    ?>   
</body>
</html>
