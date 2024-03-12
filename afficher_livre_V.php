<?php
session_start();
include("navbar_C.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
    <link rel="stylesheet" type="text/css" href="afficher_Livre.css">
</head>
<body>
    <div class="livres-container">
        <?php foreach ($livres as $livre) { ?>
            <div class="livre-card">
                <img class="livre-image" src="https://marketplace.canva.com/EADt6z3FfFs/1/0/1024w/canva-sarcelle-doré-pigeon-illustration-prière-journal-livre-couverture-turquoise-ZOIpyFKV5rU.jpg" alt="Image du livre">
                <div class="livre-info">
                    <h2 class="livre-titre"><?php echo $livre['titre']; ?></h2>
                    <p class="livre-auteur">écrit par <?php echo $livre['auteur']; ?></p>
                    <a class="en-savoir-plus" href="afficher_livre_detail_C.php?id=<?php echo $livre['id']; ?>"><i class="uil uil-plus-circle icon"></i>En savoir plus</a>
                    <?php if ($_SESSION["role"] == "admin") { ?>
                        <a class="modifier" href="modifier_livre_C.php?id=<?php echo $livre['id']; ?>"><i class="uil uil-edit-alt icon"></i>Modifier</a>
                        <a class="supprimer" href="supprimer_livre_C.php?id=<?php echo $livre['id']; ?>"><i class="uil uil-trash icon"></i>Supprimer</a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
