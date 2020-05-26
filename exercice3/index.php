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
    <ul>
    <?php
    //Version foreach (spécial tableaux)
    foreach ($months as $element){
       ?>
       <li><?= $element; ?></li>
       <?php } ?>
    </ul>
</body>
</html>