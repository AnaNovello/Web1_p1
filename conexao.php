<?php
    //preencher as credenciais 'usuario' e 'senha'
    $usuario = '';
    $senha = '';
    $host_bd = 'pgsql:host= ;dbname= ';

    try{
        $conn = new PDO($host_bd, $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo 'ERROR: '.$erro->getMessage();
    }
?>
