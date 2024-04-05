<?php 
session_start();

require_once '../db_connect.php';

if(isset($_POST['btn-deletar'])):
  
    $idAulas = mysqli_escape_string($connect, $_POST['idAulas']);

    $sql = "DELETE FROM aulas WHERE idAulas = '$idAulas' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../../aula/indexAula.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../../aula/indexAula.php');
    endif;
endif;
?>