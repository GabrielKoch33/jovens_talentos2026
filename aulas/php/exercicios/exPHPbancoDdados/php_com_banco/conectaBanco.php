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
            
    
    $oConexao = pg_connect($sConexao);
    return $oConexao;
}

?>