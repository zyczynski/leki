<?php

// wyswietl liste wszystkich lekow dodanych do bazy

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

print_r($wyniki);