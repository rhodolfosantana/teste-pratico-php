<?php

session_start();
$user = "root";
$pass = "root";
$host = "localhost";
$db   = "sales";

try {

    $connection = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

    

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
}