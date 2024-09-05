<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css" />
    <script href="https://releases.jquery.com/git/jquery-git.js"></script>
    <script href="main.js"></script>
</head>

<body>
<img src="./images/doispontos.png" width="70px" height="60px" class="spamado">
    <div id="container">
        <?php

        include_once("./menu.php");

        ?>
        <div id="content">
            <span>

                Mensagem de retorno:
                <?php

                if(isset($_GET['r'])){
                    $r = $_GET['r'];
                    echo " Usuário de matrícula $r Autenticado com Sucesso";
                } else {
                    echo" Falha na autenticação (Usuário ou senha incorreto)";
                }

                ?>
                <a href="./index.php" class="bckBtn">Voltar</a>
            </span>
        </div>
    </div>
</body>

</html>