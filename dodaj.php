<?php

require_once 'database/database.php';

if (isset($_POST['lek']))
{
    require_once 'lek.php';
    $lek = new Lek($_POST['lek'], $_POST['ilosc'], $_POST['zapotrzebowanie']);
   // print_r($lek);
   // echo '<br>';


    $lek = [$lek->getNazwa(), $lek->getIlosc(), $lek->getZapotrzebowanie()];

    $result = $db->exec('INSERT INTO customers(Nazwa, Ilosc, Zapotrzebowanie)
    VALUES (foreach ($lek as $leki)
    {
    return $leki;   
    });
}

//var_dump($lek);

