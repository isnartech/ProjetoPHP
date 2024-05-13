<?php

    $dbHost = 'Localhost';
    $dbUsername = 'usuario';
    $dbPassword = 'senha';
    $dbName = 'nome do banco de dados';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>