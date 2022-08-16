<?php

session_start();
include "connection.php";
include "domain/user.php";
//include "checkuser.php";

$loginUser = $_POST['fuser'];
$password = $_POST['fpassword'];

//echo $user.$password;
$sql = "SELECT * FROM tbl_usuario WHERE username='$loginUser' and password='$password'";

$resultado = mysqli_query($conexao,$sql);
if(mysqli_num_rows($resultado) > 0){
    //$_SESSION['user'] = $loginUser;
    while($linha = mysqli_fetch_assoc($resultado)){
        $user = new User;
        $user->id = $linha["id_usuario"];
        $user->nome = $linha["nome"];
        $user->username = $linha["username"];
        $user->dataNasc = $linha["data_nascimento"];
        $user->email = $linha["email"];
        /*$user->setNome($linha["nome"]);
        $user->setUsername($linha["username"]);
        $user->setDataNasc($linha["data_nascimento"]);*/

        $_SESSION['user'] = serialize($user);
    }
    //var_dump($user);
    //echo $_SESSION['user']->nome;
    header('Location: ../forum.php');
}else{
    echo '<div style="text-align: center;font-size:28px;color:red;margin-top:30px;">Usuário não encontrado</div>';
    header('refresh:2;url=../login.html');
}

mysqli_close($conexao);

?>