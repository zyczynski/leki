<?php

require_once 'database/database.php';

if (isset($_POST['lek']))
{
    require_once 'lek.php';
    $lek = new Lek($_POST['lek'], $_POST['ilosc'], $_POST['zapotrzebowanie']);
   // print_r($lek);
   // echo '<br>';


    $nazwa_leku = $lek->getNazwa();
    $ilosc_leku = $lek->getIlosc();
    $zapotrzebowanie_na_lek = $lek->getZapotrzebowanie();

    $result = $db->exec('INSERT INTO leki (Nazwa, Ilosc, Zapotrzebowanie)
    VALUES ('$nazwa_leku', '$ilosc_leku', '$zapotrzebowanie_na_lek'));
  }

//var_dump($lek);

