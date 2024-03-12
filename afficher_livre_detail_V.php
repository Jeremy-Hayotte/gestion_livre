<?php
session_start();
include("navbar_C.php");

if ($articleDetail) {
    echo '<div class="container">';
    echo '<h2>Détails du livre</h2>';
    echo '<img class="livre-image" src="https://marketplace.canva.com/EADt6z3FfFs/1/0/1024w/canva-sarcelle-doré-pigeon-illustration-prière-journal-livre-couverture-turquoise-ZOIpyFKV5rU.jpg" alt="Image du livre">';
    echo '<div class="book-info">';
    echo "Titre : " . $articleDetail['titre'] . "<br>";
    echo "Auteur : " . $articleDetail['auteur'] . "<br>";
    echo "Genre : " . $articleDetail['nom'] . "<br>";
    echo "Année de publication : " . $articleDetail['annee_publication'] . "<br>";
    echo "Prix : " . $articleDetail['prix'] . "<br>";

    // Ajoutez un formulaire pour choisir la quantité
    echo '<form action="panier_C.php" method="post">';
    echo '<input type="hidden" name="article_id" value="' . $articleDetail['id'] . '">';
    echo 'Quantité : <input type="number" name="quantity" value="1" min="1"><br>';
    echo '<input type="submit" value="Ajouter au panier">';
    echo '</form>';

    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="container">';
    echo '<div class="not-found">Livre non trouvé.</div>';
    echo '</div>';
}
?>
