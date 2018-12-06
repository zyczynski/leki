<?php
$id = $_GET['id'];
echo $id;
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

        <th>Nowa Nazwa</th>
        <th>Aktualizuj ilość</th>
        <th>Aktualizuj zapotrzebowanie</th>
    </tr>
    </thead>

    <tbody>

            <tr>
                <?php"<form action='dupa.php?id=$id;' method='post'>"?>
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
