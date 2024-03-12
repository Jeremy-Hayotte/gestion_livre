<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Livre</title>
    <link rel="stylesheet" type="text/css" href="ajouter_livre.css">
</head>

<body>
    <div class="container">
        <h1>Ajouter un Livre</h1>
        <form action="ajouter_livre_M.php" method="post">
            <div class="input-group">
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre" required>
            </div>

            <div class="input-group">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" required>
            </div>

            <div class="input-group">
                <label for="id_genre">Genre :</label>
                <select id="id_genre" name="id_genre" required>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?php echo $genre['id']; ?>"><?php echo $genre['nom']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="input-group">
                <label for="annee">Année de publication :</label>
                <input type="number" id="annee" name="annee" required>
            </div>

            <div class="input-group">
                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" step="0.01">
            </div>

            <div class="input-group">
                <label for="stock">Stock :</label>
                <input type="number" id="stock" name="stock" min="0" required>
            </div>

            <input type="submit" name="ajouter_livre" value="Ajouter Livre" class="btn-primary">
        </form>

        <a href="afficher_livre_C.php" class="btn-secondary">Retour à la Liste des Livres</a>
    </div>
</body>
</html>
