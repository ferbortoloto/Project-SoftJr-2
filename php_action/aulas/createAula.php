
<?php 
session_start();

error_log("Teste");

require_once '../db_connect.php';

    $idCurso = mysqli_escape_string($connect, $_POST['idCurso']);
    $tituloAula = mysqli_escape_string($connect, $_POST['tituloAula']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $dataAula = mysqli_escape_string($connect, $_POST['dataAula']);
    

    $sql = "INSERT INTO aulas (idCurso, tituloAula, descricao, dataAula) VALUES ('$idCurso','$tituloAula','$descricao','$dataAula')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../../aula/indexAula.php');
    else: 
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../../aula/indexAula.php');
    endif;
    
?>