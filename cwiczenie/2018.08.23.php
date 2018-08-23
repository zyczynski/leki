<?php

$tablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter', 'zainteresowania' => ['psy'=>['rasowe','czarne'], 'koty'=>['duze', 'domowe']]],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj', 'zainteresowania' => ['baby'=>['blondynki','rude'], 'kwiatki'=>['zielone', 'czerwone']]]
    ];

//echo '<pre>';
//print_r($tablica);

echo $tablica['bartek']['zainteresowania']['baby']['0'];

echo '<br>' . '<br>';


foreach ($tablica as $imie=>$dane)

{
    foreach ($dane['zainteresowania']['baby'] as $zainteresowanie)
    {
        echo $zainteresowanie;
    }
}