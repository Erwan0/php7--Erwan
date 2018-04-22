<?php

// création de la connexion
$dsn = 'mysql:dbname=projet;host=127.0.0.1';
$user = 'root';
$password = '';
$connection = new PDO($dsn, $user, $password);

// suppression d'un joueur
if (isset($_GET['delete_id'])) {
    $statement = $connection->prepare("
        DELETE
        FROM joueur
        WHERE id = :delete_id
    ");

    $statement->bindValue(':delete_id', $_GET['delete_id']);
    $statement->execute();
}
