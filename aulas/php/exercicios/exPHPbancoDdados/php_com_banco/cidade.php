<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cidade</title>
</head>
<body>
    <?php
    require_once 'arq_conectaBanco.php'
    ?>
    <!-- MENU DE NAVEGAÇÃO -->
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

    <!-- LISTAGEM -->
    <fieldset>
        <h4>Listagem de Cidades</h4>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>

            <!-- AQUI ENTRA O foreach/while COM OS REGISTROS DO BANCO -->
            <!--
            <tr>
                <td><?php echo $linha['codigo']; ?></td>
                <td><?php echo $linha['descricao']; ?></td>
                <td><a href="cidade.php?deletar=<?php echo $linha['codigo']; ?>">Deletar</a></td>
            </tr>
            -->

        </table>
    </fieldset>

    <br>

    <!-- CADASTRO -->
    <fieldset>
        <h4>Cadastro de cidade</h4>
        <form action="cidade.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>