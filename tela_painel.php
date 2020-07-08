<?php
    include 'script_autenticacao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Tavares Freire - lucas_tavares10@hotmail.com">
    <title>Painel</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<script type="text/javascript">
    function redirecionar_logout(){
        window.location.href = "script_logout.php"
    }

</script>

<body>

    <header class="cabecalho">
        <button class="btn_opcoes" onclick="redirecionar_logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</button>
        <form name="formBusca" method="post" action="tela_resultados.php">
            <input type="text" name="txt_busca" placeholder=" Buscar usuarios cadastrados">
            <button class="btn_busca" type="submit"><i class="fa fa-search fa-lg"></i></button>
        </form> 

        <h1 class="labelPagina">Painel</h1>

        <h1 class="logo"><a href="index.php" title="Blog do Lucas"></a></h1>
        <h1 class="legendaLogo">Blog do Lucas!</h1>
    </header>
    
</body>
</html>