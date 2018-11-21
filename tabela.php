<?php

// wyswietl liste wszystkich lekow dodanych do bazy

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

//print_r($wyniki);
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table border="1">

    <thead>
    <tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Ilość</th>
        <th>Zapotrzebowanie</th>
        <th>Data dodania</th>
    </tr>
    </thead>

    <tbody>
    <?php

    foreach ($wyniki as $wynik)
    {
        $lek = $wynik['Nazwa'];
        $id = $wynik['id'];
        echo "<tr><td>{$wynik['id']}</td>
              <td>{$wynik['Nazwa']}</td>
              <td>{$wynik['Ilosc']}</td>
              <td>{$wynik['Zapotrzebowanie']}</td>
              <td>{$wynik['Data']}</td>
              <td><a href=\"update.php?lek = <?php echo $lek ?>?id = <?php echo $id; ?>\"> edit </a></td>
              </tr>";

    }
    ?>

    </tbody>
</table>

</body>
</html>