<?php

require '../classes/Sessao.php';

$session_Dest = new Sessao();



$session_Dest->carregar('nome');


if(isset($_GET['destruir'])) {

$session_Dest->destruir();


echo "<script> window.alert('Encerrando Sessão..') </script> ";
echo "<script> location.href='../login/login.php'; </script>";



}
?>