<?php
    //conectar ao banco
    $conexao = new PDO("mysql:host=localhost;dbname=wine","root","");
    //ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //recebendo os dados por get
    $id = $_GET["id"];
    //cria o query da execução
    $comandoSQL = $conexao->prepare("DELETE FROM avaliacao WHERE id=".$id);
    //execução da query
    $comandoSQL->execute();
?>