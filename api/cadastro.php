<?php

    require_once 'conexao.php';
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['senha'] = $_POST["senha"];

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $query = mysqli_query($conn, "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if ($query == 1){
        echo 'tudo certo';
    }else {
        echo 'falhou';
        print_r($conn);
    }
?>