<?php
$username = "root";
$password = "root";
try {
    $con = new PDO('mysql:host=localhost:3306;dbname=star', $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
}

?>