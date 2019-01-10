<?php

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

foreach ($wyniki as $wynik)

    {


        $zapotrzebowanie = $wynik['Zapotrzebowanie'];

        $datetime1 = new DateTime($wynik['Data']);
        $datetime2 = new DateTime(date("Y-m-d"));
        $interval = $datetime1->diff($datetime2);
        $pozostalo = ($interval->format('%R%a')) * ($zapotrzebowanie);

        echo $pozostalo;
        echo "<br>";
    }

