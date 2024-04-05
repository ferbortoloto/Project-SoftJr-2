<?php 
session_start();

require_once '../db_connect.php';

if(isset($_POST['btn-deletar'])):
  
    $idProfessores = mysqli_escape_string($connect, $_POST['idProfessores']);

    $sql = "DELETE FROM professores WHERE idProfessores = '$idProfessores' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../../professor/indexProf.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../../professor/indexProf.php');
    endif;
endif;
?>