<?php

    if(!empty($_GET['id_usuario']))
    {
        include_once('config.php');

        $id_usuario = $_GET['id_usuario'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id_usuario";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
?>