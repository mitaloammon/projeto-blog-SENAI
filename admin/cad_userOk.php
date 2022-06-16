<?php 

    include "../config/connection.php";

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $stmt = $conectar->prepare("INSERT INTO users(nome, login, senha) VALUES(:nome,:login,:senha)");//insere na tabela do banco de dados
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':login',$login);
    $stmt->bindParam(':senha',$senha);

    $stmt->execute();

    header("Location:cad_user.php");
?>
