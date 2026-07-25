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
        "MERCADO.FTBFUNCIONARIO",
        "FCNNOME",
        $_POST['nome']
    );

    header("Location: departamento.php");
    exit;
}


if (isset($_GET['deletar'])) {

    deletar(
        $oConexao,
        "MERCADO.FTBFUNCIONARIO",
        "FCNCODIGO",
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
    <title>Funcionário</title>
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
        <h4>Listagem de Funcionários</h4>

        <table border="1" cellpadding="5" >
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Departamento</th>
                <th>Ações</th>
            </tr>

            <?php
            $sSelect = "SELECT
                            F.FCNCODIGO,
                            F.FCNNOME,
                            D.DPTDESCRICAO
                        FROM MERCADO.TBFUNCIONARIO F
                        INNER JOIN MERCADO.TBDEPARTAMENTO D
                        ON F.DPTCODIGO = D.DPTCODIGO
                        ORDER BY F.FCNCODIGO
                        ";

            $oResultado = pg_query($oConexao, $sSelect);

            while ($oLinha = pg_fetch_assoc($oResultado)) {
            ?>
                <tr>
                    <td><?php echo $oLinha['fcncodigo']; ?></td>
                    <td><?php echo $oLinha['fcnnome']; ?></td>
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
        <h4>Cadastro de Funcionarios</h4>
        <form action="funcionarios.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <label for="nome">ID Departamento:</label>
            <input type="number" name="dpt" id="dpt">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>