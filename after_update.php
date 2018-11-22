<?php
error_reporting(E_ALL);
session_start();

if ($_POST['nazwa'])
{
    require_once 'database/database.php';

    $sql = "UPDATE leki SET Nazwa = ?, Ilosc = ?, Zapotrzebowanie = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$_POST['nazwa'], $_POST['ilosc'], $_POST['zapotrzebowanie'], $_SESSION['id']]);

    echo "Zaktualizowano";
}
else
{
    echo "nie udało się wykonać aktualizacji";
}




