<?php 
    $departements = [
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme',
    ];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 5 PHP</title>
</head>
<body>
    <p><?php
        foreach($departements as $elements){
            echo $elements , ' ';
        }
    ?></p>
</body>
</html>