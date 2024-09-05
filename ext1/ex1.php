<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css" />
	<script href="https://releases.jquery.com/git/jquery-git.js"></script>
	<script href="main.js"></script>
</head>

<body>
<img src="./images/trespontos.png" width="70px" height="60px" class="spamado">
    <div id="container">
        <?php

        include_once("./menu.php");

        ?>
        <div id="content">
            <form action="./comp/ex1Comp.php" method="post">
                <label for="fatorial">Número:</label>
                <input type="number" name="fatorial">
                <input type="submit" value="Enviar" name="submit">
                <a href="./index.php" class="bckBtn">Voltar</a>
            </form>
        </div>
    </div>

</body>

</html>