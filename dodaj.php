<?php
error_reporting(E_ALL);
require_once 'database/database.php';

if (isset($_POST['lek']))
{
    require_once 'lek.php';
    $lek = new Lek($_POST['lek'], $_POST['ilosc'], $_POST['zapotrzebowanie']);
   // print_r($lek);
   // echo '<br>';



    $sql = "INSERT INTO leki (Nazwa, Ilosc, Zapotrzebowanie, Data) VALUES (?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$lek->getNazwa(),$lek->getIlosc(), $lek->getZapotrzebowanie(), '2018-11-10']);

    echo "dodano do bazy";
  }
  else
  {
      echo "nie udało się dodać do bazy";
  }

//var_dump($lek);

