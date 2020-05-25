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
    <title>Exercice 6 PHP</title>
</head>
<body>
    <p>
    <?php foreach($departements as $key => $value){
        echo 'Le département ' , $value , ' a le numéro ' , $key , ' ; ';
    } ?></p>
</body>
</html>