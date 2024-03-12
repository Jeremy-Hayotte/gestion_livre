<?php
include('Database.php');

$searchTerm = isset($_GET['q']) ? $_GET['q'] : '';

try {
    $sql = "SELECT * FROM article WHERE titre LIKE :searchTerm OR auteur LIKE :searchTerm";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gérer les erreurs
    echo "Erreur lors de la recherche : " . $e->getMessage();
}


?>
