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
        <input type="text" name="tipo" id="tipo">
        <label for="ids">Campo 'id':</label>
        <input type="text" name="ids" id="ids">
        <button type="submit"> Gerar Inputs magicamente</button>
    </form>
    <?php
    include('funcoes.php');

    ?>
</body>
</html>