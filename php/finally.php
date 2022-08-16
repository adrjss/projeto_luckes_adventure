<?php 

session_start();
session_destroy();
echo '<div style="text-align: center;font-size:28px;margin-top:30px;">Finalizando sistema, até logo</div>';
header('refresh:2;url=../login.html');
?>