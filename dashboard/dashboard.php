<?php   

include '../classes/Sessao.php';

$session = new Sessao();

$nome = $session->carregar('nome');
$email = $session->carregar('email');

$cookie = $_COOKIE['lembrar'] ?? '';


if(!isset($_COOKIE['lembrar'])){



        echo "nenhum cookie salvo";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Usuario da sessao: <?= htmlspecialchars($nome) ?></h4>
    <h4>Email salvo no cookie: <?= htmlspecialchars($cookie) ?></h4>



</body>
</html>