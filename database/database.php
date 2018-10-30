<?php
error_reporting(E_ALL);


$config = require_once 'config.php';

try
{
    $db = new PDO("mysql: host={$config['host']};
    database={$config['database']};
    charset=utf8",
    $config['user'],
    $config['password']);
}


catch (PDOException $error)
{
    echo $error;
    exit('błąd bazy danych');
}