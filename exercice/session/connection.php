<?php
session_start();

 if (!isset($_SESSION['history'])) {
     $_SESSION['history'] = [];
 }

 $firstname = 'Anonyme';
 if (isset($_GET['firstname'])) {
     $firstname = $_GET['firstname'];
 }

 $_SESSION['history'][] = sprintf(
     'Heure : %s - %s',
     date('H:i:s'),
     $firstname
 );

 ?>
