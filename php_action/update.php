<?php 
session_start();

require_once './db_connect.php';

if(isset($_POST['btn-editar'])):
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $nomeResponsavel = mysqli_escape_string($connect, $_POST['nomeResponsavel']);

    $idAluno = mysqli_escape_string($connect, $_POST['idAluno']);

    $sql = "UPDATE alunos SET cpf = '$cpf' , nome = '$nome', telefone = '$telefone', idade = '$idade', nomeResponsavel = '$nomeResponsavel' WHERE idAluno = '$idAluno'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../index.php');
    endif;
endif;
?>