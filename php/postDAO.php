<?php



$method= $_GET['method'];

switch($method){

    case 'delete' :
        $parameter= $_GET['parameter'];
        delete($parameter);
        break;
    case 'update' :
        //$parameter= $_GET['parameter'];s
        $parameter= $_GET['parameter'];
        $parameter1= $_GET['parameter1'];
        update($parameter,$parameter1);
        break;
    default :
        //echo 'no run';
        break;

}

function delete($id) {
    include "connection.php";    
    $sql = "DELETE FROM tbl_post WHERE id_post=$id";
    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
    header('Location: ../perfil.php');
    //header('refresh: 0.2; url=../perfil.php');
}
function update($id,$message){
    include "connection.php"; 
    //Pega as informações do html
    $sql = "UPDATE tbl_post SET mensagem='$message' WHERE id_post='$id'";

    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
    echo "Post editado com sucesso!";

}
?>