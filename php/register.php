<?php


include "connection.php";

$nome = $_POST['fnome'];
$email = $_POST['femail'];
$user = $_POST['fuser'];
$nascimento = $_POST['fnascimento'];
$password = $_POST['fpassword'];


//echo $nome.$email.$user.$nascimento.$password;

$sql = "INSERT INTO tbl_usuario(nome,email,username,password,data_nascimento) 
VALUES('$nome','$email','$user','$password','$nascimento')";

mysqli_query($conexao,$sql);
mysqli_close($conexao);
//echo "Cadastrado com sucesso!";
header('Location: ../login.html');

//header('refresh:2;url=../forum.php');


?>