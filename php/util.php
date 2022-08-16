<?php


function qtdePost() {
    include "connection.php";

    $sql = "SELECT COUNT(id_post) qtde_posts FROM tbl_post";
    $resultado = mysqli_query($conexao,$sql);
    mysqli_close($conexao);
    $linha = mysqli_fetch_array($resultado);
    if(!empty($linha['qtde_posts'])){
        echo $linha['qtde_posts'];
    }else{
        echo '0';
    }
}
//Não funcionou não sei porque
function isLogged() {
    include "domain/user.php";
    include "checkuser.php";
    
    if($user != null){
        echo'<div class="user-panel-bg ">
                <a href="php/finally.php">Sair</a>
            </div>
            <div class="user-panel">
				<a href="perfil.php">'. $user->nome .'</a>
			</div>
            ';
    }else{
        echo'<div class="user-panel">
				<a href="login.html">Login</a>  /  <a href="registrar.html">Registrar</a> 
			</div>';
    }
    
}

function maskDate($data,$type){
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR.utf-8');
    date_default_timezone_set('America/Sao_Paulo');
    if($type == "wide"){
        $dataFormatada =  strftime('%a, %d de %b de %Y', strtotime($data));
        return $dataFormatada;
    }else{
        $dataFormatada =  strftime('%d/%m/%Y', strtotime($data));
        return $dataFormatada;
    }
}

?>