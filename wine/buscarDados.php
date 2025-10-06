<?php
    //conectar ao banco
    $conexao = new PDO("mysql:host=localhost;dbname=wine","root","");
    //ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //cria o query da execução
    $comandoSQL = $conexao->query("SELECT * FROM avaliacao ORDER BY nome");
    //cria um array
    $stringJSON = array();
    //executar a query e inserir no array
    while($linhaBD = $comandoSQL->fetch()){
        $stringJSON[]=$linhaBD;
    }
    //gera um json a partir do array
    $arrayJSON = json_encode($stringJSON,JSON_UNESCAPED_SLASHES || JSON_UNESCAPED_UNICODE);
    //exibe o array
    print $arrayJSON;
    //execução da query
    $comandoSQL->execute();    
?>