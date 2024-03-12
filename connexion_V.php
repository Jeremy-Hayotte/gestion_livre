<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Ajout d'une police Google pour un style plus moderne -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Ajout de FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pdAdGQk79KiWvv+oD16oT3GX+L9oRUy4AyTnnXtGm8cp9FkxvBsMRq9WuwESbF5UNGN+3I/ikVbUGTo1Kz4Tkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <h1>Connexion</h1>

        <form action="connexion_C.php" method="post">
            <div class="input-container">
                <label for="username"><i class="uil uil-user"></i></label>
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
            </div>

            <div class="input-container">
                <label for="password"><i class="uil uil-lock"></i></label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            </div>

            <input type="submit" name="connexion" value="Connexion">
            <?php if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p class='error-msg'>Nom d'utilisateur ou mot de passe incorrect.</p>";} ?>
        </form>

        <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a>.</p>
    </div>

</body>
</html>
