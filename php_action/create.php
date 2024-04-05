<?php 
session_start();

require_once 'db_connect.php';

    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $nomeResponsavel = mysqli_escape_string($connect, $_POST['nomeResponsavel']);
    

    $sql = "INSERT INTO alunos (cpf, nome, telefone, idade, nomeResponsavel) VALUES ('$cpf','$nome','$telefone','$idade' , '$nomeResponsavel' )";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../index.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../index.php');
    endif;

?>