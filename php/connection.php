<?php

//Informações necessarias para conexão com banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$banco = "gamedb";
$conexao = mysqli_connect($host,$user,$pass,$banco) or die(mysql_error());

?>