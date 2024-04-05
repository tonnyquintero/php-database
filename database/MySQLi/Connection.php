<?php

$server="127.0.0.1";
$database="finanzas_personales";
$port=3306;
$username="root";
$password="";

$mysqli=new mysqli($server,$username,$password,$database,$port);

// Comprobar conexión de manera orientada a objetos
if ($mysqli->connect_errno)
    die("Falló la conexión: {$mysqli->connect_error}");

// Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);