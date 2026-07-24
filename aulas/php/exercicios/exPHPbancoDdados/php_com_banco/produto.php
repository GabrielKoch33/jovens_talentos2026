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

    header("Location: produto.php");
    exit;
}


if (isset($_GET['deletar'])) {

    deletar(
        $oConexao,
        "MERCADO.TBDEPARTAMENTO",
        "DPTCODIGO",
        $_GET['deletar']
    );

    header("Location: produto.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto</title>
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
        <h4>Listagem de Produto</h4>

        <table border="1" cellpadding="5" >
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Descrição Categoria</th>                
            </tr>

            <?php
            $sSelect = "SELECT
                            P.PROCODIGO,
                            P.PRONOME,
                            P.PRODESCRICAO,
                            P.PROVALOR,
                            P.PROESTOQUE,
                            C.CATDESCRICAO,
                            F.FORNOME
                        FROM MERCADO.TBPRODUTO P
                        INNER JOIN MERCADO.TBCATEGORIA C
                        ON P.CATCODIGO = C.CATCODIGO
                        INNER JOIN MERCADO.TBFORNECEDOR F
                        ON P.FORCODIGO = F.FORCODIGO
                        ORDER BY P.PROCODIGO
                        ";

            $oResultado = pg_query($oConexao, $sSelect);

            while ($oLinha = pg_fetch_assoc($oResultado)) {
            ?>
                <tr>
                    <td><?php echo $oLinha['procodigo']; ?></td>
                    <td><?php echo $oLinha['pronome']; ?></td>
                    <td><?php echo $oLinha['prodescricao']; ?></td>
                    <td><?php echo $oLinha['provalor']; ?></td>
                    <td><?php echo $oLinha['proestoque']; ?></td>
                    <td><?php echo $oLinha['catedescricao']; ?></td>
                    <td><?php echo $oLinha['fornome']; ?></td>
                    <td>
                        <a href="produto.php?deletar=<?php echo $oLinha['cidcodigo']; ?>">
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
        <h4>Cadastro de Produto</h4>
        <form action="produto.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <label for="nome">Descrição:</label>
            <input type="text" name="desc" id="desc">
            <br><br>
            <label for="nome">Valor:</label>
            <input type="text" name="valor" id="valor">
            <br><br>
            <label for="nome">Estoque:</label>
            <input type="text" name="estoque" id="estoque">
            <br><br>                                    
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>