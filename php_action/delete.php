<?php 
session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
  
    $idAluno = mysqli_escape_string($connect, $_POST['idAluno']);

    $sql = "DELETE FROM alunos WHERE idAluno = '$idAluno' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../index.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../index.php');
    endif;
endif;
?>