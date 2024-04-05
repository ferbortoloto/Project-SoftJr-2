<?php 
session_start();

require_once '../db_connect.php';

if(isset($_POST['btn-editar'])):
    $idCurso = mysqli_escape_string($connect, $_POST['idCurso']);
    $tituloAula = mysqli_escape_string($connect, $_POST['tituloAula']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $dataAula = mysqli_escape_string($connect, $_POST['dataAula']);

    $idAulas = mysqli_escape_string($connect, $_POST['idAulas']);

    $sql = "UPDATE aulas SET idCurso = '$idCurso', tituloAula = '$tituloAula', descricao = '$descricao', dataAula = '$dataAula' WHERE idAulas = '$idAulas'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../../aula/indexAula.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../../aula/indexAula.php');
    endif;
endif;
?>