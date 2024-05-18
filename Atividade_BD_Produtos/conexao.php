<?php
    $servidor = "localhost";
    $banco = "bdpw2";
    $usuario = "root";
    $senha = "";

    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>