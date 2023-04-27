<?php
    include("conecta.php");
    // Para pegar o texto dos inputs
    $nome = $_POST["nome"];
    $cpf      = $_POST["cpf"];
    $email     = $_POST["email"];
    $senha     = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO usuario(nome,cpf,email,senha) VALUES ('$nome','$cpf', '$email' ,'$senha')");

    $resultado = $comando->execute();

    // Para voltar no formulário
    header("Location: cartão.html");
?>