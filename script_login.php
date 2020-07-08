<?php        
    include "script_conexao_bd.php"; //$conexao
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Tavares Freire - lucas_tavares10@hotmail.com">
    <title>Realizando login</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<script type="text/javascript">
        function login_realizado(){
                window.location.href = "tela_painel.php";
        }  

        function login_recusado(){
            setTimeout(function() {
                window.location.href = "tela_login.php";
            }, 3000);
        }
</script>

<body>
    <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die(mysqli_error());
        $linhas = mysqli_num_rows($sql); 

        if($linhas > 0){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            echo "<script>login_realizado()</script>";

        } else {
            echo "<header class='feedback'>
                    <h1 class='logoFeedback'> <a title='Blog do Lucas'> </a></h1>
                     <h1 class='legendaLogoFeedback'>Email ou senha inválidos! Aguarde...</h1>
                </header>";
            echo "<script>login_recusado()</script>";
        }


    ?>
</body>
</html>