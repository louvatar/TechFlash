<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Tec Flash</title>
</head>
<body>
<div>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E tenha o seu computador<br>consertado rapidamente!</h1>
            <form action="testeLogin.php" method="POST">
            <img src="img/flash logo.png" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" required>
                    <img src="./img/email.png" height="16" width="16" id="email-icon">
                </div>
                <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required>
                        <img src="./img/padlock.png" height="17" width="17" id="padlock-icon">
                    </div>
                    <input class="btn-login" type="submit" name="submit" id="submit" value="Acessar">
                    <a class="br-cadastrar" href="cadastrar.php">Ainda não é inscrito?<strong> Cadastre-se!</strong></a>
            </div>
    </div>
    </div>
</form>
</body>
</html>
