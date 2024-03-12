<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
</head>
<body>

    <h1>Résultats de la recherche</h1>

    <p>Résultats pour la recherche "<?php echo htmlspecialchars($searchTerm); ?>" :</p>

    <?php
    if ($resultats) {
        foreach ($resultats as $livre) {
            // Affichez les détails du livre comme vous le souhaitez
            echo "<p>Titre : " . $livre['titre'] . "<br>Auteur : " . $livre['auteur'] . "</p>";
        }
    } else {
        echo "<p>Aucun résultat trouvé.</p>";
    }
    ?>

    <a href="afficher_Livre_C.php">Retour à la Liste des Livres</a>

</body>
</html>
