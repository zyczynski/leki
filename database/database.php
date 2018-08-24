<?php

$config = require_once 'config.php';

try
{
    $db = new PDO("msql: host={$config['host']};
    database={$config['database']};
    charset=utf8",
    $config['user'],
    $config['password'],
        [PDO::ATTR_EMULATE_PREPARES=>false],
        [PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE_EXCEPTION]);
}

catch (PDOException $error)
{
    exit('błąd bazy danych');
}