
<?php 
include '../classes/Sessao.php';

$session = new Sessao();

$nome = $session->carregar('nome');
$email = $session->carregar('email');




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo </title>


</head>
<body>

<h1>Bem vindo <?= htmlspecialchars($nome) ?></h1>
    <h3>Gostaria de Sair da Sessão ? </h3>
    <form type="submit" action="../logout/logout.php">
    <input type="submit"  value="submit" name="destruir" >
</form>



    <h3>Ver Dashboard</h3>
    <form type="submit" action="../dashboard/dashboard.php">
    <input type="submit" value="submit">


</form>
</body>
</html>