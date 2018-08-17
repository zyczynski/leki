<?php
require_once '../lek.php';

$leki=
    [
        new Lek("furaginum", 20, 2),
        new Lek('flegamina', 20, 3)
    ];

echo "<pre>";
foreach ($leki as $dupa)
{
    echo $dupa->getNazwa();
}

echo "<br>";

print_r($leki);

print_r($leki['1']);
print_r($leki['1']->getIlosc());

$tablica=
    [
        'piotrek'=>['tofik', 'mruczek'], //zamiast tofika etc. new lek
        'bartek'=>['gucio']
    ];

    