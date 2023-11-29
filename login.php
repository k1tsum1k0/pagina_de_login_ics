<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
</head>
<body id="a"> 
    <div class='container'>
        <div class='login-box'>
    <h1>Login</h1>
    <form action="processamentoLogin.php" method="post">
    <label for="username">Nome de usuario:</label>
    <input type="text" id='username' name='usuario' required><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="senha"><br>
    <input type="submit" value="Logar">
    </form>
    <a href="cadastro.php">Cadastre-se</a>
</div>
</div>
</body>

</html>