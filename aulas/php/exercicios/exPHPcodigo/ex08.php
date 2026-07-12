<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex08.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">

        <button type="submit">enviar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['nome']) && isset($_POST['senha'])) {
                $mUsername = $_POST['nome'];
                $mSenha = $_POST['senha'];

                if ($mUsername == 'matheus' && $mSenha == 'pastel'){
                    echo "Autenticação bem sucedida!";
                } elseif ($mUsername !== 'matheus' && $mSenha == 'pastel') {
                    echo "Usuário incorreto!";
                } elseif ($mUsername == "matheus" && $mSenha !== 'pastel'){
                    echo "Senha incorreta!";
                } else {
                    echo "Tudo errado";
                }
            }
        }
    ?>
</body>
</html>