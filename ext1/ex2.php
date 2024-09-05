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
            <form action="./comp/ex2Comp.php" method="post">
                <label for="chave">Chave: </label>
                <input type="number" name="chave">
                <br>
                <label for="senha">Senha: </label>
                <input type="password" maxlength="45" name="senha">
                <br>
                <br>
                <span>
                    <input type="submit" class="bckBtn" name="Logar" value="Logar">
                    <a href="./index.php" class="bckBtn">Voltar</a>
                </span>
            </form>
        </div>
    </div>
</body>

</html>