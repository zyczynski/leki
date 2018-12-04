<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table border="1">

    <thead>
    <tr>

        <th>Nowa Nazwa</th>
        <th>Aktualizuj ilość</th>
        <th>Aktualizuj zapotrzebowanie</th>
    </tr>
    </thead>

    <tbody>

            <tr>

              <form action='' method='post'>
                <td><input name="nazwa" type="text"</input></td>
                 <td><input name="ilosc" type="text"</input></td>
                <td><input name="zapotrzebowanie" type="text"</input></td>

              </tr>


    </tbody>
</table>
<br><br>
<input type="submit">
</form>
</body>
</html>

<?php
if (($_POST['nazwa']) != '')
{

require_once 'database/database.php';

$sql = "UPDATE leki SET Nazwa = ?, Ilosc = ?, Zapotrzebowanie = ? WHERE id = ?";
$pdo->prepare($sql)->execute([$_POST['nazwa'], $_POST['ilosc'], $_POST['zapotrzebowanie'], $_GET['id']]);

echo "Zaktualizowano";
}
else
{
echo "nie udało się wykonać aktualizacji";
}
?>