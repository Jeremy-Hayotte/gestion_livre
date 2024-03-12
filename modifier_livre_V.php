<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Livre</title>
    <link rel="stylesheet" type="text/css" href="modifier_livre.css">
</head>
<body>

    <div class="container">
        <h1>Modifier Livre</h1>

        <form action="modifier_Livre_C.php" method="post">
            <input type="hidden" name="id" value="<?php echo $livre['id']; ?>">

            <div class="input-group">
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre" value="<?php echo $livre['titre']; ?>" required>
            </div>

            <div class="input-group">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" value="<?php echo $livre['auteur']; ?>" required>
            </div>

            <div class="input-group">
                <label for="id_genre">Genre :</label>
                <select id="id_genre" name="id_genre" required>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?php echo $genre['id']; ?>" <?php echo ($genre['id'] == $livre['id_genre']) ? 'selected' : ''; ?>>
                            <?php echo $genre['nom']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="input-group">
                <label for="annee_publication">Année de publication :</label>
                <input type="number" id="annee_publication" name="annee_publication" value="<?php echo $livre['annee_publication']; ?>" required>
            </div>

            <div class="input-group">
                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" step="0.01" value="<?php echo $livre['prix']; ?>">
            </div>

            <div class="input-group">
                <label for="stock">Stock :</label>
                <input type="number" id="stock" name="stock" min="0" value="<?php echo $livre['stock']; ?>" required>
            </div>

            <input type="submit" name="modifier_livre" value="Modifier Livre" class="btn-primary">
        </form>

        <a href="afficher_livre_C.php" class="btn-secondary">Retour à la Liste des Livres</a>
    </div>

</body>
</html>



