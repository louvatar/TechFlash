<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id_usuario = $_POST['id_usuario'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereço = $_POST['endereço'];

        $sqlUpdate = "UPDATE usuarios SET user='$user', email='$email', senha='$senha', confSenha='$confSenha', cpf='$cpf', telefone='$telefone', endereço='$endereço'
        WHERE id_usuario='$id_usuario'";

    $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>