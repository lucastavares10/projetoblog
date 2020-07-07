<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Tavares Freire - lucas_tavares10@hotmail.com">
    <title>Bem vindo! - Blog do Lucas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho">

        <button class="btn_opcoes" onclick="redirecionar_cadastro()">Cadastre-se</button>
        <button class="btn_opcoes" onclick="redirecionar_login()">Entrar</button>

        <form method="post" action>
            <input type="text" placeholder="Faça uma busca">
            <button class="btn_busca"><i class="fa fa-search fa-lg"></i></button>
        </form> 

        <h1 class="labelPagina">Bem Vindo!</h1>

        <h1 class="logo"><a href="index.php" title="Blog do Lucas"></a></h1>
        <h1 class="legendaLogo">Blog do Lucas!</h1>
    </header>
</body>

<script type="text/javascript">

    function redirecionar_cadastro(){
        window.location.href = "tela_cadastro.php"; 
    }

    function redirecionar_login(){
        window.location.href = "tela_login.php"; 
    }

</script>

</html>