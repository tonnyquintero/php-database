<?php

$server="127.0.0.1";
$database="finanzas_personales";
$port=3306;
$username="root";
$password="";

try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();
} catch(PDOException $e) {
    die("Connection failed: {$e->getMessage()}");
}

