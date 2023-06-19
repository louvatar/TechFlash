<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $user = $_POST['user'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereço = $_POST['endereço'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(user,email,senha,confSenha,cpf,telefone,endereço) VALUES 
        ('$user','$email','$senha','$confSenha','$cpf','$telefone','$endereço')");
        header('Location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-register.css">
    <title>Tec Flash</title>
</head>
<body>
<a id="voltar" href="login.php">Voltar</a>
<form id="form" action="cadastrar.php" method="POST" class="form">
<div>
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1>Cadastre-se,<br>venha fazer parte de<br>nossa equipe!</h1>
            <img src="img/flash logo.png" class="left-cadastro-image">
        </div>
        <div class="right-cadastro">
            <div class="card-cadastro">
                <h1>CADASTRAR</h1>

                <div class="textfield">
                    <label for="username">Nome</label>
                    <input type="text" name="user" placeholder="Seu nome completo" id="username">
                    <img src="./img/user.png" height="17" width="17" id="user-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>
                
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" id="email">
                    <img src="./img/email.png" height="16" width="16" id="email-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" id="password">
                    <img src="./img/padlock.png" height="17" width="17" id="padlock-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="password-confirmation">Confirmar senha</label>
                    <input type="password" name="confSenha" placeholder="Confirme sua senha" id="password-confirmation">
                    <img src="./img/padlock.png" height="17" width="17" id="padlock-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" placeholder="CPF" id="cpf">
                    <img src="./img/documento.png" height="17" width="17" id="cpf-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" placeholder="Telefone" id="telefone">
                    <img src="./img/phone-call.png" height="17" width="17" id="phone-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="endereço">Endereço</label>
                    <input type="text" name="endereço" placeholder="Endereço" id="endereço">
                    <img src="./img/address.png" height="17" width="17" id="address-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>
                    <input class="btn-cadastro" type="submit" name="submit" id="submit">
            </div>
    </div>
    </div>
</form>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/139915d590.js" crossorigin="anonymous"></script>
</body>
</html>
