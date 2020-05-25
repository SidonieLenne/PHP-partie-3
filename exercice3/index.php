<?php 
    $months = [
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Août',
        'Septembre',
        'Octobre',
        'Novembre',
        'Décembre'
    ];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 3 PHP</title>
</head>
<body>
    <p><?php
    /*Version for
    for ($number=0 ; $number<12 ; $number++){
        echo $months[$number] , ' ';
    }*/
    //Version foreach (spécial tableaux)
    foreach ($months as $element){
        echo $element , ' ';
    }
    ?></p>
</body>
</html>