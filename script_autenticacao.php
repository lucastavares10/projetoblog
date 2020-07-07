<?php
    include 'script_conexao_bd.php'; //$conexao

    session_start ();
    if( !isset($_SESSION['email']) || !isset($_SESSION['senha']) ){
        header("Location: tela_login.php");
        exit;
    }

?>