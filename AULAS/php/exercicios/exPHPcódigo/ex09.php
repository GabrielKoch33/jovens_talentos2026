<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex09.php" method="post">
        <label for="esporte">Selecione seus esportes: </label><br>
        <input type="checkbox" name="esporte[]" id="esporte" value="Futebol"> Futebol</input><br>
        <input type="checkbox" name="esporte[]" id="esporte" value="Volei"> Volei</input><br>
        <input type="checkbox" name="esporte[]" id="esporte" value="Basquete"> Basquete</input><br>
        <input type="checkbox" name="esporte[]" id="esporte" value="Natacao"> Natação</input><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['esporte']) && !empty($_POST['esporte'])){
                foreach ($_POST['esporte'] as $esporte) {
                    echo $esporte. "<br>";
                }
            }
        }
    ?>
</body>
</html>
