<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categoria</title>
</head>
<body>
    <?php
    require_once 'arq_conectaBanco.php'
    $oConexao = conectaBanco()
    if ($oConexao == FALSE){
        echo 'ERRO AO CONECTAR NO BANCO!'
    } else
        echo 'CONEXÃO ESTABELECIDA!'
    
    ?>
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
        <h4>Listagem de Categorias</h4>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            <?php
            $sSelect = "SELECT * FROM MERCADO.TBCATEGORIA";
            $oResultado = pg_query($oConexao,$sSelect);
            ?>
            <?php while ($oLinha = pg_fetch_assoc($oResultado)){
            <tr>
                <td><?php echo $oLinha['codigo']; ?></td>
                <td><?php echo $oLinha['descricao']; ?></td>
                <td><a href="categoria.php?deletar=<?php echo $oLinha['codigo']; ?>">Deletar</a></td>
            </tr>
           }
            <?php endwhile;?>
        </table>
    </fieldset>

    <br>

    <!-- CADASTRO -->
    <fieldset>
        <h4>Cadastro de Categoria</h4>
        <form action="categoria.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        
        ?>
    </fieldset>

</body>
</html>