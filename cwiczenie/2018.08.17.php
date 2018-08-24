<?php

$tablica = [
    'piotrek' => ['wiek' => 32, 'wzrost' => 180, 'status'=>'aktywny'],
    'bartek' => ['wiek' => 33, 'wzrost' => 180, 'status'=>'nieaktywny'],
];






foreach ($tablica as $imie => $dane)
{
    echo 'imię to ' . $imie . '<br>';
    echo '<br>';
    echo $dane['status'] . "<br>";
}


echo 'Status Bartka: '. $tablica['bartek']['status'];
//echo '<pre>';
//print_r($tablica);