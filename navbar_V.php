<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Ajout de FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pdAdGQk79KiWvv+oD16oT3GX+L9oRUy4AyTnnXtGm8cp9FkxvBsMRq9WuwESbF5UNGN+3I/ikVbUGTo1Kz4Tkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="afficher_livre_C.php">J&M Corporation</a>
            </div>
            <ul class="nav-links">
                <li><a href="afficher_livre_C.php">Accueil</a></li>
                <?php if ($_SESSION["role"] == "admin") { ?>
                    <li><a href="ajouter_livre_C.php">Ajouter Livre</a></li>
                <?php } ?>
            </ul>
            <form action="rechercher_livre_C.php" method="get" class="search-form">
                <input type="text" name="q" placeholder="Rechercher un livre...">
                <button type="submit"><i class="uil uil-search"></i></button>
            </form>
        </nav>
    </header>
</body>
</html>
