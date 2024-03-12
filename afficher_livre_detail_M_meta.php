<?php
session_start();
include('Database.php');

if (isset($_GET['id'])) {
    $articleId = $_GET['id'];
    
    try {
        $sql = "SELECT article.*, categorie.nom FROM article
                INNER JOIN categorie ON article.id_genre = categorie.id
                WHERE article.id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $articleId);
        $stmt->execute();
        $articleDetail = $stmt->fetch(PDO::FETCH_ASSOC);

        $zones = ["div1", "div2", "div3"]; // Ajoutez ici toutes les zones nécessaires
        $metamodelisationRules = [];

        foreach ($zones as $zone) {
            $metamodelisationSql = "SELECT * FROM Metamodelisation WHERE interface_zone = :zone";
            $metamodelisationStmt = $conn->prepare($metamodelisationSql);
            $metamodelisationStmt->bindParam(':zone', $zone);
            $metamodelisationStmt->execute();
            $rules = $metamodelisationStmt->fetchAll(PDO::FETCH_ASSOC);

            // Ajouter les règles pour la zone actuelle
            $metamodelisationRules[$zone] = $rules;
        }

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "ID du livre non spécifié.";
}
?>

