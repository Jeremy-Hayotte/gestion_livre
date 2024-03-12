
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="afficher_livre_C.php">Accueil</a></li>
                <?php if ($_SESSION["role"] == "admin") { ?>
                    <li><a href="ajouter_livre_C.php">Ajouter Livre</a></li>
                <?php } ?>
            </ul>
            <form action="rechercher_livre_C.php" method="get">
                <input type="text" name="q" placeholder="Rechercher un livre...">
                <button type="submit">Rechercher</button>
            </form>
        </nav>
    </header>
</body>
</html>