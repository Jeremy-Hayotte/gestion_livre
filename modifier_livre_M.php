<?php
include('Database.php');

try {
    $sql = "SELECT id, nom FROM categorie";
    $stmt = $conn->query($sql);
    $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des genres : " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['modifier_livre'])) {
    try {
        $id = $_POST['id'];
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $genre = $_POST['id_genre'];
        $annee_publication = $_POST['annee_publication'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];

        $sql = "UPDATE article SET titre = :titre, auteur = :auteur, id_genre = :id_genre, annee_publication = :annee_publication, prix = :prix, stock = :stock WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
        $stmt->bindParam(':id_genre', $genre, PDO::PARAM_STR);
        $stmt->bindParam(':annee_publication', $annee_publication, PDO::PARAM_INT);
        $stmt->bindParam(':prix', $prix, PDO::PARAM_STR);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);

        $stmt->execute();

        header("Location: afficher_livre_C.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour du livre : " . $e->getMessage();
    }
}

$id = isset($_GET['id']) ? $_GET['id'] : null;
$livre = null;

try {
    if ($id) {
        $sql = "SELECT article.*, categorie.nom FROM article
                INNER JOIN categorie ON article.id_genre = categorie.id
                WHERE article.id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $livre = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    // Gère les erreurs
    echo "Erreur lors de la récupération du livre : " . $e->getMessage();
}

// Vérifie si le livre existe
if (!$livre) {
    echo "<p>Livre non trouvé.</p>";
    exit();
}


if (!$livre) {
    echo "<p>Livre non trouvé.</p>";
    exit();
}
?>
