<?php

if(isset($_POST["massa"]) && isset($_POST["volume"])) {
    $massa = empty($_POST["massa"]) ? 0 : $_POST["massa"];
    $volume = empty($_POST["volume"]) ? header("location: ../ex3.php") : $_POST["volume"];

    $densidade = $massa/$volume;

    header("location: ../ex32.php?r=$densidade");
} else {
    header("location: ../ex3.php");
}

?>