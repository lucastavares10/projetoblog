<?php

    $endereco = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "projetoblog";
    $conexao = mysqli_connect($endereco, $usuario, $senha, $banco) or die(mysqli_error());

?>
