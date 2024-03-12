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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ajouter_livre'])) {
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $id_genre = $_POST['id_genre'];
        $annee = $_POST['annee'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];

        try {
            $sql = "INSERT INTO article (titre, auteur, id_genre, annee_publication, prix, stock) VALUES (:titre, :auteur, :id_genre, :annee, :prix, :stock)";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
            $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
            $stmt->bindParam(':id_genre', $id_genre, PDO::PARAM_INT);
            $stmt->bindParam(':annee', $annee, PDO::PARAM_INT);
            $stmt->bindParam(':prix', $prix, PDO::PARAM_STR);
            $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);

            $stmt->execute();

            header("Location: afficher_livre_C.php");
            exit();
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du livre : " . $e->getMessage();
        }
    }
}
?>
