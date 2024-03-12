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
        <?php
        foreach ($livres as $livre) { 
             ?>
            <div class="livre">
                <img class="livre-image" src="https://marketplace.canva.com/EADt6z3FfFs/1/0/1024w/canva-sarcelle-doré-pigeon-illustration-prière-journal-livre-couverture-turquoise-ZOIpyFKV5rU.jpg" alt="Image du livre">
                <h1 class="livre-titre">Titre : <?php echo $livre['titre']; ?></h1>
                <h2 class="livre-auteur">Auteur : <?php echo $livre['auteur']; ?></h2>
                <a class="en-savoir-plus" href="afficher_livre_detail_C.php?id=<?php echo $livre['id']; ?>">En savoir plus</a>
                <?php if ($_SESSION["role"]=="admin"){?><a class="en-savoir-plus" href="modifier_livre_C.php?id=<?php echo $livre['id']; ?>">Modifiez</a><?php }?>
                <?php if ($_SESSION["role"]=="admin"){?><a class="en-savoir-plus" href="supprimer_livre_C.php?id=<?php echo $livre['id']; ?>">Supprimmer</a><?php }?>
            </div>
        <?php }?>
    </div>
</body>
</html>
