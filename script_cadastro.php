<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Tavares Freire - lucas_tavares10@hotmail.com">
    <title>Cadastrando Usuário</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<script type="text/javascript">

    function redirecionar_login(){
        setTimeout(function() {
            window.location.href = "tela_login.php"; 
        }, 3000);        
    }

</script>

<body>

    <?php
        include 'script_conexao_bd.php'; //$conexao

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql =  mysqli_query($conexao, "INSERT INTO usuario(nome, sobrenome, pais, estado, cidade, email, senha) VALUES ('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");


        echo "<header class='corpoFeedback'>
                <h1 class='logoFeedback'> <a title='Blog do Lucas'> </a></h1>
                <h1 class='legendaLogoFeedback'>Cadastro realizado com sucesso! Aguarde...</h1>
            </header>";
        echo "<script>redirecionar_login()</script>";


        mysqli_close($conexao);
    ?>
    
</body>
</html>