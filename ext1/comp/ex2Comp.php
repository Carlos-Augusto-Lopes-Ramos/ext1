<?php

include_once "connection.php";
include_once "./classes/Login.php";

$login = new Login($con);

if(isset($_POST['chave']) && isset($_POST['senha'])) {
    $login->validate($_POST['chave'], $_POST['senha']);
} else {
    
header("location: ../ex2.php");
}


?>