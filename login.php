<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="tela_login">
        <h1>Login</h1>

        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
                <br><br>
            <input type="password" name="senha" placeholder="Senha">
                <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>


    </div>

</body>
</html>