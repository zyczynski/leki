<?php
if (isset($_POST['ilosc']))
{

    require_once 'database/database.php';

    $sql = "UPDATE leki SET Nazwa = ?, Ilosc = Ilosc + ?, Zapotrzebowanie = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$_POST['nazwa'], $_POST['ilosc'], $_POST['zapotrzebowanie'], $_GET['id']]);

    echo "Zaktualizowano";
}
else
{
    echo "nie udało się wykonać aktualizacji";
}
