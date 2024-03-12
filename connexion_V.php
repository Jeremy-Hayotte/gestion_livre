<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="chemin/vers/votre/style.css">
</head>
<body>

    <h1>Connexion</h1>

    <form action="connexion_C.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="connexion" value="Se Connecter">
        <?php if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color: red;'>Nom d'utilisateur ou mot de passe incorrect.</p>";} ?>
    </form>

 
    <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a>.</p>

</body>
</html>
