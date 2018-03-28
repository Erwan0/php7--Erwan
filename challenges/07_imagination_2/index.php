<?php

require_once(__DIR__.'/src/vehicule.php');
require_once(__DIR__.'/src/voiture.php');
require_once(__DIR__.'/src/train.php');
$voiture = new Voiture('voiture');
$train = new Train('train');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>07_imagination_2</title>
    </head>
    <body>
        <h2>Voiture</h2>
        <p><?php print $voiture; ?></p>
        <h2>Train</h2>
        <p><?php print $train; ?></p>
    </body>
</html>
