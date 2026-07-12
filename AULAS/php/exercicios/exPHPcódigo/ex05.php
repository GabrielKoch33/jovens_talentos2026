<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex05.php" method="post">
        <label for="">Nota 1</label>
        <input type="number" name="n1" id="n1">
        <label for="">Nota 2</label>
        <input type="number" name="n2" id="n2">
        <label for="">Nota 3</label>
        <input type="number" name="n3" id="n3">
        <label for="">Nota 4</label>
        <input type="number" name="n4" id="n4">
        <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST['n1'])
            && isset($_POST['n2'])
            && isset($_POST['n3'])
            && isset($_POST['n4'])
            ){
                $fN1 = $_POST['n1'];
                $fN2 = $_POST['n2'];
                $fN3 = $_POST['n3'];
                $fN4 = $_POST['n4'];

                $fMedia = $fN1 + $fN2 + $fN3 + $fN4;

                if ($fMedia >= 7){
                    echo $fMedia. '<br>';
                    echo 'Aprovado!';
                } else {
                    echo 'Reprovado!';
                }
            }
        }
    ?>
</body>
</html>