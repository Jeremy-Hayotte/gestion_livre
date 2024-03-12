<?php
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
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "ID du livre non spécifié.";
}
?>
