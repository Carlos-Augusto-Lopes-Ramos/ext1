<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css" />
	<script href="https://releases.jquery.com/git/jquery-git.js"></script>
	<script href="main.js"></script>
</head>

<body>
<img src="./images/umPonto.png" width="70px" height="60px" class="spamado">
    <div id="container">
        <?php

        include_once("./menu.php");

        ?>
        <div id="content">
            <form action="./comp/ex3Comp.php" method="POST">
                <label for="massa">Massa: </label>
                <input type="number" name="massa">
                <br>
                <label for="volume">Volume: </label>
                <input type="number" name="volume">
                <br>
                <br>
                <span>
                    <input type="submit" class="bckBtn" name="Calcular" value="Calcular">
                    <a href="./index.php" class="bckBtn">Voltar</a>
                </span>
            </form>
        </div>
    </div>
</body>

</html>