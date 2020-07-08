<?php        
    include "script_conexao_bd.php"; //$conexao
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de usuários</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Leckerli+One&display=swap" rel="stylesheet">
</head>
<body>

    <header class="cabecalho">
        <button class="btn_opcoes" onclick="redirecionar_logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</button>
        <form name="formBusca" method="post" action="tela_resultados.php">
            <input type="text" name="txt_busca" placeholder=" Buscar usuarios cadastrados">
            <button class="btn_busca" type="submit"><i class="fa fa-search fa-lg"></i></button>
        </form> 

        <h1 class="labelPagina">Busca</h1>

        <h1 class="logo"><a href="index.php" title="Blog do Lucas"></a></h1>
        <h1 class="legendaLogo">Blog do Lucas!</h1>
    </header>

    <header class="resultados">
        <?php
            $txt_busca = $_POST['txt_busca'];

            $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE CONCAT(nome, sobrenome) like '%".$txt_busca."%'");
            $linhas = mysqli_num_rows($sql);

            if($linhas > 0){

                echo "<table>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>E-mail</th>
                            <th>País</th>
                            <th>Estado</th>
                            <th>Cidade</th>
                        </tr> ";

                while($linha = mysqli_fetch_array($sql)){
                    $nome = $linha['nome'];
                    $sobrenome = $linha['sobrenome'];
                    $email = $linha['email'];
                    $pais = $linha['pais'];
                    $estado = $linha['estado'];
                    $cidade = $linha['cidade'];

                    echo "<tr>
                            <td>".$nome."</td>
                            <td>".$sobrenome."</td>
                            <td>".$email."</td>
                            <td>".$pais."</td>
                            <td>".$estado."</td>
                            <td>".$cidade."</td>
                        </tr>";

                }

                echo "</table>";
            }

        ?>
    </header>
    
</body>
</html>