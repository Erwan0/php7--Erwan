<?php

require_once(__DIR__.'/src/bdd.php');

// ajout d'un joueur
if (isset($_POST['name'])) {
    $statement = $connection->prepare("
        INSERT INTO joueur(name, victoire)
        VALUES(:name, :victoire)
    ");

    $statement->bindValue(':name', $_POST['name']);
    $statement->bindValue(':victoire', $_POST['victoire']);
    $statement->execute();
}

// affichage de la liste
$statement = $connection->prepare("
    SELECT *
    FROM joueur
    ORDER BY victoire DESC, id ASC, name ASC
");
$statement->execute();
$names = $statement->fetchAll();
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Match</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="">League Of Legend</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Classement1.php">
                        <i class="fas fa-trophy"></i> Classement
                    </a>
                    <a class="nav-link" href="Match.php">
                        <i class="fas fa-trophy"></i> Match
                    </a>

                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <form action="recherche.php" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                </button>
            </form>
        </div>
    </nav>

<br><br><br>
    <main role="main"><br><br>
        <div class="container">
            <h2>Match :</h2>

            <?php if (count($names) === 0) { ?>
                <div class="alert alert-success" role="alert">
                    Il n'y a pas de joueur
                </div>
            <?php } else { ?>
            <hr />

            <div class="container">
                <table class="table">
                    <?php foreach ($names as $name) { ?>
                        <tr>
                            <td><?= $name['name'] ?></td>
                            <td><?= $name['victoire'] ?></td>
                            <td style="text-align: right">
                                <a href="Match.php?delete_id=<?= $name['id'] ?>">Supprimer</a>
                            <td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
                <form action="Match.php" method="POST">
                    <h2>Ajouter un joueur</h2>
                    <div class="form-group">
                        <label for="Joueur">Joueur</label>
                        <input name="name" type="name" class="form-control" id="name" placeholder="Nom du joueur"><br>
                    </div>
                    <div class="form-group">
                        <label for="Nombre de Victoire">Nombre de Victoire</label>
                        <input name="victoire" type="victoire" class="form-control" id="victoire" placeholder="Nombre de victoire"><br>
                    </div>
                        </select>
                    <button type="submit" class="btn btn-primary">Ajouter un joueur</button><br><br>
                </form>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="container">
        <p>&copy; Les données proviennent du site <a target="_blank" href="https://www.leagueofgraphs.com/lcs/lcs-players">League of Graphs</a></p>
    </footer>
</body>
</html>
