
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Página de Cadastro</title>
</head>
<body id="b">
<div class='container'>
        <div class='login-box'>
    <h1>Cadastro</h1>
    <form action="processamentoCadastro.php" method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="usuario" required><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="login.php">Voltar para o Login</a>
</div>
</div>
</body>
</html>