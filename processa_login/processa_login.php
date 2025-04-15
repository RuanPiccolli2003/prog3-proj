
<?php

include '../classes/Usuario.php';
require '../classes/Sessao.php';
require '../classes/Autenticacao.php';


$email = $_POST['email_log'] ?? '';
$senha = $_POST['senha_log'] ?? '';
$nome = $_POST['nome'] ??  '';

$sessao = new Sessao();

$email_log = $sessao->carregar('email');
$senha_log = $sessao->carregar('senha');



$auth_log = new Autenticacao($nome, $email, $senha);

if(empty($email) || empty($senha) ){
    $auth_log->validar_login();

}elseif($email_log != $_POST['email_log'] || $senha_log != $_POST['senha_log']){
    $auth_log->validar_credencias_login();
}

elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $auth_log->validar_email_login();

}elseif($_POST['email_log'] && $_POST['senha_log']){
    $sessao->carregar('nome');

    $usuario_login = new Usuario($email, $senha, $nome);


    if(isset($_POST['lembrar'])){
    setcookie('lembrar', $_POST['email_log'], time() + 3600, "/");

    echo "<script>alert('cookies ativos')</script>";



}

echo "<script> window.alert('Logado com Sucesso') </script> ";
echo "<script> location.href='../index/index.php'; </script>";










}



?>