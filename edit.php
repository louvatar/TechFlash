<?php

    if(!empty($_GET['id_usuario']))
    {
        include_once('config.php');

        $id_usuario = $_GET['id_usuario'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id_usuario";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            $user = $user_data['user'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $confSenha = $user_data['confSenha'];
            $cpf = $user_data['cpf'];
            $telefone = $user_data['telefone'];
            $endereço = $user_data['endereço'];
            }
            print_r($user);
        }
        else
        {
            header('Location: sistema.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style80.css">
    <title>Tec Flash</title>
</head>
<body>
<a id="voltar" href="saveEdit.php">Voltar</a>
<form id="form" action="saveEdit.php" method="POST" class="form">
<div>
    <div class="main-login">
        <div class="left-login">
            <h1>Cadastre-se,<br>venha fazer parte de<br>nossa equipe!</h1>
            <img src="img/flash logo.png" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRAR</h1>

                <div class="textfield">
                    <label for="username">Nome</label>
                    <input type="text" name="user" placeholder="Seu nome completo" id="username" value="<?php echo $user ?>" required>
                    <img src="./img/user.png" height="17" width="17" id="user-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>
                
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" id="email" value="<?php echo $email ?>" required>
                    <img src="./img/email.png" height="16" width="16" id="email-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" id="password" value="<?php echo $senha ?>" required>
                    <img src="./img/padlock.png" height="17" width="17" id="padlock-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                    <div id="icon" onclick="showHide()"></div>
                </div>

                <div class="textfield">
                    <label for="password-confirmation">Confirmar senha</label>
                    <input type="password" name="confSenha" placeholder="Confirme sua senha" id="password-confirmation" value="<?php echo $confSenha ?>" required>
                    <img src="./img/padlock.png" height="17" width="17" id="padlock-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" placeholder="CPF" id="cpf" value="<?php echo $cpf ?>" required>
                    <img src="./img/documento.png" height="17" width="17" id="cpf-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" placeholder="Telefone" id="telefone" value="<?php echo $telefone ?>" required>
                    <img src="./img/phone-call.png" height="17" width="17" id="phone-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>

                <div class="textfield">
                    <label for="endereço">Endereço</label>
                    <input type="text" name="endereço" placeholder="Endereço" id="endereço" value="<?php echo $endereço ?>" required>
                    <img src="./img/address.png" height="17" width="17" id="address-icon">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <i class="fa-solid fa-circle-check"></i>
                    <small>Mensagem de erro</small>
                </div>
                    <input type="submit" name="update" id="update">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>"
                    <form>
            </div>
    </div>
    </div>
</body>
</html>

<style>
    #update {
        width: 100%;
        padding: 15px 10px;
        /* essa é foda*/
        margin: 30px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #1E1E1E;
        background: #dbdbdb;
        cursor: pointer;
        box-shadow: 0px 10px 30px -20px #000000;
        /*importante*/
        margin-top: 18px;
}
</style>