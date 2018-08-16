
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<b>Dodaj lek!</b><br><br>

<form action="dodaj.php" method="post">
    <label>Nazwa leku <input name="lek" type="text"></label>
    <?php
    if (isset($_SESSION['e_lek']))
    {
        echo $_SESSION['e_lek'];
        unset($_SESSION['e_lek']);
    }
    ?>

    <br>

    <label>Ilość tabletek <input name="ilosc" type="text"></label>

    <?php
    if (isset($_SESSION['e_ilosc']))
    {
        echo $_SESSION['e_ilosc'];
        unset($_SESSION['e_ilosc']);
    }
    ?>


    <br>

    <label>Zapotrzebowanie dzienne<input name="zapotrzebowanie" type="text"></label>

    <?php
    if (isset($_SESSION['e_zap']))
    {
        echo $_SESSION['e_zap'];
        unset($_SESSION['e_zap']);
    }
    ?>
    <br><br>
    <input type="submit">
</form>


</body>
</html>