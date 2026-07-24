<?php

function deletar($conexao,$tabela,$coluna,$valor){

    $sql = "DELETE FROM $tabela
            WHERE $coluna='$valor'";

    return pg_query($conexao,$sql);
}

function inserir($conexao, $tabela, $dados){

    $colunas = implode(", ", array_keys($dados));
// retorna uma string para as chaves do vetor [CLINOME,CLICPF]->'CLINOME,CLICPF'

    $valores = "'" . implode("', '", array_values($dados)) . "'";
// concatena " " e junta os values com ', ' para que fique assim: "'val1','val2'"

    $sql = "INSERT INTO $tabela ($colunas)
            VALUES ($valores)";

    return pg_query($conexao, $sql);
}
?>
