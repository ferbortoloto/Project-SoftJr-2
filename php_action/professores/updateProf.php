<?php 
session_start();

require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $idProfessores = mysqli_escape_string($connect, $_POST['idProfessores']);

    $sql = "UPDATE professores SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', idade = '$idade' WHERE idProfessores = '$idProfessores'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location:../../professor/indexProf.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../professor/indexProf.php');
    endif;
endif;
?>