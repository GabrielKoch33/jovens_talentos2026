
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex02.php" method="post">
        <label for="escolha">True ou False</label>
        <select name="escolha" id="campo">
            <option value="true">True</option>
            <option value="false">False</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php 
    #terminar dps
        include('funcoes.php');
                $aArray = [
                   1 => 'Banana',
                   'Maçã',
                   'Abacaxi',
                   'Tomate',
                   'Morango',
                   'Pastel',
                   'Limão',
                   'Abacate',
                   'Melão'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['escolha'])){
                $sEscolha = $_POST['escolha'];
                montaSelect($aArray,'frutas',$sEscolha);
            }
        }


    ?>
</body>
</html>