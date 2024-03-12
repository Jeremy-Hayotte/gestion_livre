<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Livre</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Supprimer Livre</h1>

    <p>Êtes-vous sûr de vouloir supprimer ce livre ?</p>

    <form action="supprimer_livre_C.php" method="get">
        <input type="hidden" name="id" value="<?php echo $livre['id']; ?>">
        <input type="submit" name="supprimer_livre" value="Supprimer Livre">
    </form>

    <a href="afficher_livre_C.php">Retour à la Liste des Livres</a>

</body>
</html>