<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Livre</title>
    <link rel="stylesheet" type="text/css" href="afficher_livre_detail.css">
</head>
<body>

<?php
session_start();
include("navbar_C.php");

if ($articleDetail) {
    echo '<div class="parent">';
    echo '<div class="div1">';
        echo "<h2>" . $articleDetail['titre'] . "</h2>";
        echo '<img class="book-image" src="https://marketplace.canva.com/EADt6z3FfFs/1/0/1024w/canva-sarcelle-doré-pigeon-illustration-prière-journal-livre-couverture-turquoise-ZOIpyFKV5rU.jpg" alt="Image du livre">';
        echo "<p><strong>Prix:</strong> " . $articleDetail['prix'] . "</p>";
    echo '</div>';

    echo '<div class="div2">';
        echo "<p><strong>Auteur:</strong> " . $articleDetail['auteur'] . "</p>";
        echo "<p><strong>Genre:</strong> " . $articleDetail['nom'] . "</p>";
        echo "<p><strong>Année de publication:</strong> " . $articleDetail['annee_publication'] . "</p>";
    echo '</div>';

    echo '<div class="div3">';
        echo '<form action="panier_C.php" method="post">';
            echo '<input type="hidden" name="article_id" value="' . $articleDetail['id'] . '">';
            echo 'Quantité : <input type="number" name="quantity" value="1" min="1"><br>';
            echo '<input type="submit" value="Ajouter au panier">';
        echo '</form>';

        echo '</div>';
        echo '</div>';
    echo '</div>';

echo '</div';


} else {
    echo '<div class="container">';
    echo '<div class="not-found">Livre non trouvé.</div>';
    echo '</div>';
}


?>
