<?php 

session_start();

$host = "localhost";
$user = "root";
$password = "hhhhh5";
$database = "moviestar";

$conection = new PDO("mysql:host=$host;dbname=$database", $user, $password);

// habilitando erros

$conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



?>