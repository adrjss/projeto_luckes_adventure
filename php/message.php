<?php

include "connection.php";

$mensagem = $_POST['fmessagem'];
$idUser = $_POST['fuser'];
$dateNow = date('Y-m-d');

//echo $mensagem,$idUser,$dateNow;

$sql = "INSERT INTO tbl_post (fk_id_usuario,mensagem,date_post)
VALUES('$idUser','$mensagem','$dateNow');";

mysqli_query($conexao,$sql);
mysqli_close($conexao);
//echo "Cadastrado com sucesso!";
header('Location: ../forum.php');



?>