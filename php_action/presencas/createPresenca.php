<?php
session_start();
require_once '../db_connect.php';

    $idAulas = mysqli_escape_string($connect, $_POST['idAulas']);


    $sqlResetPresenca = "UPDATE presenca SET presente = 0 WHERE idAulas = '$idAulas'";
    mysqli_query($connect, $sqlResetPresenca);

    foreach ($_POST['presenca'] as $idAluno => $presenca) {
        $idAlunoEscaped = mysqli_escape_string($connect, $idAluno);
        $presenca = ($presenca == '1') ? 1 : 0; 
        $sqlPresenca = "INSERT INTO presenca (idAulas, idAluno, presente) VALUES ('$idAulas', '$idAlunoEscaped', '$presenca') ON DUPLICATE KEY UPDATE presente = '$presenca'";
        mysqli_query($connect, $sqlPresenca);
    }

    $_SESSION['mensagem'] = "Presença atualizada com sucesso!";
    header('Location: ../../presenca/indexPresenca.php?success');
    exit;

?>
