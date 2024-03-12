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
include("navbar_C.php");
if ($articleDetail) {
    echo '<div class="parent">';

    foreach ($metamodelisationRules as $zone => $rules) {
        echo '<div class="' . $zone . '">';
        
        foreach ($rules as $rule) {
            echo '<' . $rule['champ'] . ' class="' . $rule['champ'] . '">';

            switch ($rule['champ']) {
                case 'titre':
                    echo "<h2>" . $articleDetail[$rule['champ']] . "</h2>";
                    break;
                case 'prix':
                    echo "<p><strong>Prix:</strong> " . $articleDetail[$rule['champ']] . "</p>";
                    break;
                case 'auteur':
                case 'nom':
                case 'annee_publication':
                    echo "<p><strong>" . ucfirst($rule['champ']) . ":</strong> " . $articleDetail[$rule['champ']] . "</p>";
                    break;
                case 'livre-image':
                    echo '<img class="book-image" src="https://marketplace.canva.com/EADt6z3FfFs/1/0/1024w/canva-sarcelle-doré-pigeon-illustration-prière-journal-livre-couverture-turquoise-ZOIpyFKV5rU.jpg" alt="Image du livre">';
                    break;
                case 'ajouter_panier':
                    echo '<button>Ajouter au panier</button>';
                    break;
                default:
                    break;
            }
            echo '</' . $rule['champ'] . '>';
        }
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<div class="container">';
    echo '<div class="not-found">Livre non trouvé.</div>';
    echo '</div>';
}
?>

</body>
</html>
