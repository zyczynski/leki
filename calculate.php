<?php

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

foreach ($wyniki as $wynik)

    {
        $dzisiejsza_data = date("Y-m-d");
        $data_dodania = $wynik['Data'];
        $zapotrzebowanie = $wynik['Zapotrzebowanie'];

        $datetime1 = new DateTime($data_dodania);
        $datetime2 = new DateTime($dzisiejsza_data);
        $interval = $datetime1->diff($datetime2);
        $pozostalo = ($interval->format('%R%a days')) * ($zapotrzebowanie);

        echo $pozostalo;
        echo "<br>";
    }