
<?php
include('Database.php');
session_start();

include('navbar_C.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];
    $quantity = $_POST['quantity'];

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    $articleExists = false;
    foreach ($_SESSION['panier'] as $key => $item) {
        if ($item['article_id'] == $articleId) {
            // L'article existe déjà, mettez à jour la quantité
            $_SESSION['panier'][$key]['quantity'] += $quantity;
            $articleExists = true;
            break;
        }
    }

    // Si l'article n'existe pas, ajoutez-le au panier
    if (!$articleExists) {
        $_SESSION['panier'][] = array('article_id' => $articleId, 'quantity' => $quantity);
    }
}

function getArticleDetails($articleId) {
    include('Database.php');
    try {
        $sql = "SELECT article.*, categorie.nom FROM article
                INNER JOIN categorie ON article.id_genre = categorie.id
                WHERE article.id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $articleId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}

