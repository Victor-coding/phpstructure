<?php

//подключение к MySQL
$driver = 'mysql';
$host = 'localhost';
$port = 3305;
$db_name = 'phpstructure';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
        "$driver:host=$host;port=$port;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключения к базе данных $i");
}
