<?php
$accueil = "BONJOUR";
$salaire = 2000;
$metier = "l'informatique";
$passion = "l'informatique est mon dada.";
$note = 11.5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exo 1 - Variables</title>
</head>

<body>
    <main>
        <?= '<b>' . $accueil . '</b>' ?>
        <br>
        <p>le salaire auquel j'aspire est de : <?= '<b>' . $salaire . '</b>' ?><b>€.</b></p>
        <p>La branche dans laquelle je veux travailler est : <?= '<b>' . $metier . '</b>' ?></p>
        <p>Pour préciser, <?= '<b>' . $passion . '</b>' ?></p>
        <p>La note moyenne que j'ai obtenu au bac est <?= '<b>' . $note . '</b>' ?></p>
    </main>
</body>

</html>