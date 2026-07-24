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
        "MERCADO.TBCATEGORIA",
        "CATDESCRICAO",
        $_POST['nome']
    );

    header("Location: categoria.php");
    exit;
}


if (isset($_GET['deletar'])) {

    deletar(
        $oConexao,
        "MERCADO.TBCATEGORIA",
        "CATCODIGO",
        $_GET['deletar']
    );

    header("Location: categoria.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categoria</title>
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
        <h4>Listagem de Categorias</h4>

        <table border="1" cellpadding="5" >
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>

            <?php
            $sSelect = "SELECT CATCODIGO, CATDESCRICAO FROM MERCADO.TBCATEGORIA";
            $oResultado = pg_query($oConexao, $sSelect);

            while ($oLinha = pg_fetch_assoc($oResultado)) {
            ?>
                <tr>
                    <td><?php echo $oLinha['catcodigo']; ?></td>
                    <td><?php echo $oLinha['catdescricao']; ?></td>
                    <td>
                        <a href="categoria.php?deletar=<?php echo $oLinha['catcodigo']; ?>">
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
        <h4>Cadastro de Categoria</h4>
        <form action="categoria.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>