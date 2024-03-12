<?php
include('Database.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;

try {
    if ($id) {
        $sql = "DELETE FROM livres WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        header("Location: afficher_livre_C.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur lors de la suppression du livre : " . $e->getMessage();
}

echo "ID du livre non spécifié ou erreur lors de la suppression.";
?>
