<?php

require_once 'arq_conectaBanco.php';
require_once 'funcoes.php';

$oConexao = conectaBanco();

if (!$oConexao){
    echo "Erro ao conectar ao banco.";
}


if (isset($_POST['nome'])) {

    inserir(
        $oConexao,
        "MERCADO.TBCLIENTE",
        "DPTDESCRICAO",
        $_POST['nome']
    );

    header("Location: departamento.php");
    exit;
}


if (isset($_GET['deletar'])) {

    deletar(
        $oConexao,
        "MERCADO.TBDEPARTAMENTO",
        "DPTCODIGO",
        $_GET['deletar']
    );

    header("Location: departamento.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
</head>
<body>
    <div style="display: flex">
        <a href="categoria.php">Categoria</a> |
        <a href="departamento.php">Departamento</a> |
        <a href="cidade.php">Cidade</a> |
        <a href="cliente.php">Cliente</a> |
        <a href="fornecedor.php">Fornecedor</a> |
        <a href="funcionario.php">Funcionário</a> |
        <a href="produto.php">Produto</a>
    </div>

    <hr>

    <fieldset>
        <h4>Listagem de Clientes</h4>

        <table border="1" cellpadding="5" >
            <tr>
                <th>Código Cliente</th>
                <th>Nome Cliente</th>
                <th>CPF Cliente</th>
                <th>Código Cidade</th>
                <th>Nome Cidade</th>
                <th>Ações</th>                
            </tr>

            <?php
            $sSelect = "SELECT
                            cli.CLICODIGO,
                            cli.CLINOME,
                            cli.CLICPF,
                            cid.CIDCODIGO
                            cid.CIDNOME
                        FROM MERCADO.TBCLIENTE AS cli
                        INNER JOIN MERCADO.TBCIDADE cid
                        ON cli.CIDCODIGO = cid.CIDCODIGO
                        ORDER BY cli.CLICODIGO;
                        ";
            $oResultado = pg_query($oConexao, $sSelect);

            while ($oLinha = pg_fetch_assoc($oResultado)) {
            ?>
                <tr>
                    <td><?php echo $oLinha['clicodigo']; ?></td>
                    <td><?php echo $oLinha['clinome']; ?></td>
                    <td><?php echo $oLinha['clicpf']; ?></td>
                    <td><?php echo $oLinha['cidcodigo']; ?></td>
                    <td><?php echo $oLinha['cidnome']; ?></td>
                    <td>
                        <a href="cliente.php?deletar=<?php echo $oLinha['cidcodigo']; ?>">
                            Deletar
                        </a>
                    </td>
                </tr>
            <?php
            };
            ?>
        </table>
    </fieldset>

    <br>

    <fieldset>
        <h4>Cadastro de Cliente</h4>
        <form action="departamento.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <label for="nome">CPF:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>