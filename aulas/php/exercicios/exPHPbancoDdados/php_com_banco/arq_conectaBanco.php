<?php
function conectaBanco(){
    $sHost     = '127.0.0.1';
    $sPort     = '5432';
    $sDbName   = 'mercado';
    $sUser     = 'postgres';
    $sPassword = '250107gks';

    $sConexao = "host=$sHost
                port=$sPort
                dbname=$sDbName
                user=$sUser
                password=$sPassword";
    // sConexao recebe como valor uma string contendo todos os dados necessários para se conectar ao banco
    // como: host, porta, nome do banco, usuario e senha,
            
    
    $oConexao = pg_connect($sConexao); // a string é passada para o pg_connect para realizar essa conexão
    return $oConexao;   // caso sucesso: retorna um objeto, caso falha: retorna FALSE
}
/*
Para as tabelas de categoria, departamento e cidade:
    a. Crie uma listagem de todos os registros;
    b. Desenvolva a funcionalidade de remoção de registros;
    c. Crie um formulário de cadastro.

Para as tabelas de cliente, fornecedor, funcionário e produto:
    a. Crie uma listagem de todos os registros (apresente também os dados relacionados utilizando JOINS, por exemplo, na listagem de clientes deve aparecer o código e o nome da cidade);
    b. Desenvolva a funcionalidade de remoção de registros;
    c. Crie um formulário de cadastro (relacionamentos entre tabelas devem ser realizados através de um campo Select/Option populado dinamicamente).
*/
?>