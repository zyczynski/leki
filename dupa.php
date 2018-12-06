<?php
/**
 * Created by PhpStorm.
 * User: bartlomiejzyczynski
 * Date: 05/12/2018
 * Time: 12:55
 */
//echo $_GET['id'];
print_r($_POST);
echo "</br>";
echo $_GET['id'];



//print_r($_GET);
if (isset($_POST['ilosc']))
{

    require_once 'database/database.php';

    $sql = "UPDATE leki SET Nazwa = ?, Ilosc = ?, Zapotrzebowanie = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$_POST['nazwa'], $_POST['ilosc'], $_POST['zapotrzebowanie'], $_GET['id']]);

    echo "Zaktualizowano";
}
else
{
    echo "nie udało się wykonać aktualizacji";
}
