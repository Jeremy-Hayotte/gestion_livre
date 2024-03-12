<?php

echo '<div class="panier">';
echo '<h2>Panier</h2>';

if (empty($_SESSION['panier'])) {
    echo '<p>Le panier est vide.</p>';
} else {
    echo '<ul>';
    foreach ($_SESSION['panier'] as $item) {
        // Vérifie si l'élément a les clés attendues
        if (isset($item['article_id'], $item['quantity'])) {
            $articleDetail = getArticleDetails($item['article_id']);
        
            echo '<li>';
            // Affichez les détails de l'article
            echo "Titre : " . $articleDetail['titre'] . "<br>";
            echo "Prix : " . $articleDetail['prix'] . "<br>";
            // Affichez la quantité
            echo "Quantité : " . $item['quantity'] . "<br>";
            echo '</li>';
        } else {
            // Gestion d'une situation où l'élément ne contient pas les clés attendues
            echo '<li>Erreur : élément de panier mal formaté.</li>';
        }
    }
    echo '</ul>';
}

echo '</div>';
echo '<pre>';
print_r($_SESSION['panier']);
echo '</pre>';
?>
