<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Selecione um número para ser a opção pré-selecionada: </p>
    <form action="ex03.php" method='post'>
        <select name="num" id="num">
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
        <label for="escolha">True ou False</label>
        <select name="escolha" id="campo">
            <option value="true">True</option>
            <option value="false">False</option>
        </select>
        <button type="submit"> Enviar </button>
    </form>
    <?php 
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
            if (isset($_POST['num'])){
                $iValorPadrao = (int)$_POST['num'];
                $sEscolha = $_POST['escolha'];
                montaRadio($aArray,'frutas',$sEscolha,$iValorPadrao);
                echo "<br><br>";
                montaCheckbox($aArray,'frutas',$sEscolha,$iValorPadrao);
            }
        }
    ?>
</body>
</html>