<?php
    //conectar ao banco
    $conexao = new PDO("mysql:host=localhost;dbname=wine","root","");
    //ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //recebendo os dados por get
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $origem = $_GET["origem"];
    $tipo = $_GET["tipo"];
    $nota = $_GET["nota"];
    //cria o query da execução
    $comandoSQL = $conexao->prepare("UPDATE avaliacao SET nome='".$nome."', origem='".$origem."', tipo='".$tipo."', nota=".$nota." WHERE id=".$id);
    //execução da query
    $comandoSQL->execute();
?>