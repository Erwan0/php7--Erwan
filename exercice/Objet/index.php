<?php

require_once(__DIR__.'/src/logement.php');
require_once(__DIR__.'/src/house.php');

$house = new House('La maison');
$logement = new logement('Le logement');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Héritage en PHP</title>
    </head>
    <body>
        <h2>house</h2>
        <p><?php print $house; ?></p>
        <p><?php print $house->miaou(); ?></p>

    </body>
</html>
