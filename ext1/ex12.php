<!DOCTYPE html>
<html lang="en">

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
            <span>

                <?php

                $r = $_GET['r'];
                $f = $_GET['f'];

                echo "O fatorial do número $f é: $r";

                ?>
                <a href="./index.php" class="bckBtn">Voltar</a>
            </span>
        </div>
    </div>

</body>

</html>