<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex14.php" method="post">
        <Label for="username">Nome de usuário: </Label>
        <input type="text" name="username" id="username">

        <label for="senha">Sua senha: </label>
        <input type="password" name="senha" id="senha">

        <button type="submit">Logar</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ( isset($_POST['username']) && isset($_POST['senha']) ){
                $sUsername = trim($_POST['username']);
                $sSenha = trim($_POST['senha']);
                if ( $sUsername === $sSenha){
                    echo "A senha não pode ser igual ao nome de usuário";
                } else {
                    echo "Login bem sucedido!";
                }
            }
        }
        ?>
    </form>
</body>
</html>