<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerador de senha</title>
</head>
<body>
    <?php
    define('TAMANHO_SENHA', 10);

    function gerarSenha(): string {
        $sCaracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*';
        $sEmbaralhado = str_shuffle($sCaracteres);
        $iInicio = rand(0, strlen($sEmbaralhado) - TAMANHO_SENHA);
        return substr($sEmbaralhado, $iInicio, TAMANHO_SENHA);
    }

    echo "Senha gerada: " . gerarSenha();
    ?>
</body>
</html>