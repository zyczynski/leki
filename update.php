<?php

require_once 'database/database.php';

$wyniki = $pdo->query('SELECT * FROM leki')->fetchAll(PDO::FETCH_ASSOC);

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
        <th>Nowa nazwa</th>
        <th>Ilość</th>
        <th>Aktualizuj ilość</th>
        <th>Zapotrzebowanie</th>
        <th>Aktualizuj zapotrzebowanie</th>
        <th>Data dodania</th>
    </tr>
    </thead>

    <tbody>
    <?php

    foreach ($wyniki as $wynik)
    {
        echo "<tr><td>{$wynik['id']}</td>
              <td>{$wynik['Nazwa']}</td>
              <form action='' method='get'>
                <td><input name=\"nazwa\" type=\"text\"</input></td>
              <td>{$wynik['Ilosc']}</td>
                 <td><input name=\"ilosc\" type=\"text\"</input></td>
              <td>{$wynik['Zapotrzebowanie']}</td>
                <td><input name=\"zapotrzebowanie\" type=\"text\"</input></td>
              <td>{$wynik['Data']}</td>
              </tr>";

    }

    ?>
    </tbody>
</table>
<br><br>
<input type="submit">
</form>


<?php

if ($_GET)
{
 require_once 'database/database.php';

    $sql = "UPDATE leki SET Nazwa =?, Ilosc = ?, Zapotrzebowanie = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$_GET['nazwa'], $_GET['ilosc'], $_GET['zapotrzebowanie']]);

    echo "Zaktualizowano";
  }
  else
  {
      echo "nie udało się wykonać aktualizacji";
  }

?>
</body>
</html>