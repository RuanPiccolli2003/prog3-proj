<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php




include "../classes/Usuario.php";
include "../classes/Autenticacao.php";
include "../classes/Sessao.php";

$sessao = new sessao();

$nome = $_POST['nome'] ??  '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$auth = new Autenticacao($nome,$email,$senha);


if(empty($nome) || empty($email) || empty($senha)){

    echo $auth->validar_campos_cadastro();




}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo $auth->validar_email();
}else{



   $sessao->criar('nome', $nome);
   $sessao->criar('email', $email);
   $sessao->criar('senha',$senha);

   $sessao->carregar('nome');

   $auth->cadastrar();

}


?> 

</body>
</html>




