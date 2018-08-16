<?php

if (isset($_POST['lek']))
{
    require_once 'lek.php';
    $lek = new Lek($_POST['lek'], $_POST['ilosc'], $_POST['zapotrzebowanie']);
}

print_r($lek);