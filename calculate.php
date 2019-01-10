<?php

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

foreach ($wyniki as $wynik)

    {


        $zapotrzebowanie = $wynik['Zapotrzebowanie'];

        $dataDodania = new DateTime($wynik['Data']);
        $dzisiejszaData = new DateTime(date("Y-m-d"));
        $interval = $dataDodania->diff($dzisiejszaData);
        $pozostalo = ($interval->format('%R%a')) * ($zapotrzebowanie);

        echo $pozostalo;
        echo "<br>";
    }

