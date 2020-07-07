<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Tavares Freire - lucas_tavares10@hotmail.com">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<body>

    <header class="cabecalho">
        <form method="post" action="">
            <input type="text" placeholder="Faça uma busca">
            <button class="btn_busca"><i class="fa fa-search fa-lg"></i></button>
        </form> 

        <h1 class="labelPagina">Cadastro</h1>

        <h1 class="logo"><a href="index.php" title="Blog do Lucas"></a></h1>
        <h1 class="legendaLogo">Blog do Lucas!</h1>
    </header>


    <header class="corpoCadastro">

        <form name="formCadastro" action="script_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input name="nome" type="text">
            <br>
            <label for="sobrenome">Sobrenome:</label>
            <input name="sobrenome" type="text">
            <br>
            <label for="pais">País:</label>
            <input name="pais" type="text">
            <br>
            <label for="estado">Estado:</label>
            <input name="estado" type="text">
            <br>
            <label for="cidade">Cidade:</label>
            <input name="cidade" type="text">
            <br>
            <label for="email">E-mail:</label>
            <input name="email" type="text">
            <br>
            <label for="senha">Senha:</label>
            <input name="senha" type="password">

                    <input type="submit" value="Cadastrar">


        </form>

    </header>
  

</body>
</html>