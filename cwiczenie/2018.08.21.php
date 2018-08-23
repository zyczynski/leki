<?php

$tablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter', 'zainteresowania' => ['psy', 'koty']],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj', 'zainteresowania' => ['baby', 'kwiatki']],
];

echo $tablica['piotrek']['zainteresowania']['0'];

echo '<br>'. '<br>';

foreach ($tablica as $imie=>$dane)
{
    echo $dane['zawod'];
}

echo '<br>'. '<br>';

foreach ($tablica as $imie=>$dane)
{
    foreach ($dane['zainteresowania'] as $zainteresowanie)
        echo $zainteresowanie;
}