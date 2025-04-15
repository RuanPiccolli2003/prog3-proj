<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Faça o seu Login</h3>
    <form method="post" action="../processa_login/processa_login.php">
        <label>Email</label>
        <br>
        <input placeholder="Insira o seu Email" type="text" class="" name="email_log"><br>
        <label>Senha</label>
        <br>
        <input placeholder="Insira a sua senha" type="password" class="" name="senha_log"  ><br>
        <br>
        <input type="submit">
        <br>
        <br>
        <input type="checkbox" name="lembrar">        
        <label> Lembrar meu login </label><br>
    <br>
    <label for="">Não possui uma conta ? <a href="../cadastro/cadastro.php" >clique aqui</a><br>
    </label>
        
</body>
</html>