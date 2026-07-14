<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> DIGITE ABAIXO O QUE VC DESEJA PARA ESTAR NOS CAMPO DE INPUT</p>
    <form action="ex04.php" method="post">
        <label for="nome">Campo 'name': </label>
        <input type="text" name="nome" id="nome">
        <label for="tipo">Campo 'tipo': </label>
        <select name="tipo" id="tipo">
            <option value="text">text</option>
            <option value="password">password</option>
            <option value="radio">radio</option>
            <option value="checkbox">checkbox</option>
            <option value="color">color</option>
            <option value="email">email</option>
            <option value="number">numero</option>
            <option value="tel">telefone</option>
        </select>
        <label for="qtd">Quantidade de inputs: </label>
        <input type="number" name="qtd" id="qtd">
        <button type="submit"> Gerar Inputs magicamente</button>
    </form>
    <?php
    include('funcoes.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['nome'],$_POST['tipo'])){
            $sCampoNome        = $_POST['nome'];
            $sCampoTipo        = $_POST['tipo'];
            $iQuantidadeInputs = (int)$_POST['qtd'];
            montaInput($sCampoNome,$sCampoId,$sCampoTipo,$iQuantidadeInputs);

        } else {
            echo "campos não encontrados";
        }
    } else {
        echo "erro de envio";
    }
    ?>
</body>
</html>