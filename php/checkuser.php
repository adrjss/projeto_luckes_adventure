<?php
    //include "domain/user.php"; nao precisa
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(empty($_SESSION['user'])){
        //header('Location: login.html');
        //$loginUser = null;
        $user = null;
    }else{
        //$loginUser = $_SESSION['user'];
        $user = unserialize($_SESSION['user']);
 
    }

?>