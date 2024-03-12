<?php
include('Database.php');

$livres = array();

try {
    $sql = "SELECT * FROM article";
    $stmt = $conn->query($sql);
    $livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
}
?>
