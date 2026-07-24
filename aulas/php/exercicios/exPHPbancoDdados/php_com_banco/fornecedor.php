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
        "MERCADO.TBDEPARTAMENTO",
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
    <title>Departamento</title>
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
        <h4>Listagem de Departamento</h4>

        <table border="1" cellpadding="5" >
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>

            <?php
            $sSelect = "SELECT
                            F.FORCODIGO,
                            F.FORNOME,
                            F.FORCNPJ,
                            C.CIDNOME
                        FROM MERCADO.TBFORNECEDOR F
                        INNER JOIN MERCADO.TBCIDADE C
                        ON F.CIDCODIGO = C.CIDCODIGO
                        ORDER BY F.FORCODIGO
                        ";
            $oResultado = pg_query($oConexao, $sSelect);

            while ($oLinha = pg_fetch_assoc($oResultado)) {
            ?>
                <tr>
                    <td><?php echo $oLinha['dptcodigo']; ?></td>
                    <td><?php echo $oLinha['dptdescricao']; ?></td>
                    <td>
                        <a href="departamento.php?deletar=<?php echo $oLinha['cidcodigo']; ?>">
                            Deletar
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </fieldset>

    <br>

    <fieldset>
        <h4>Cadastro de Departamento</h4>
        <form action="departamento.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>