<?php 
session_start();

require_once '../db_connect.php';

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    

    $sql = "INSERT INTO professores (nome, cpf, telefone, idade) VALUES ('$nome','$cpf','$telefone','$idade')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../../professor/indexProf.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../professor/indexProf.php');
    endif;

?>