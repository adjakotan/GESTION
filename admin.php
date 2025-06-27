<?php
session_start();
require 'base_donnees.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$sql = "SELECT * FROM plaintes ORDER BY date_soumission DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$plaintes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Plaintes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Liste des plaintes reçues</h2>
    <a href="deconnexion.php">Déconnexion</a>
    
    <?php if (empty($plaintes)): ?>
        <p>Aucune plainte enregistrée</p>
    <?php else: ?>
        <ul>
            <?php foreach ($plaintes as $plainte): ?>
                <li>
                    <strong>Sujet :</strong> <?= htmlspecialchars($plainte['sujet']) ?><br>
                    <strong>Description :</strong> <?= nl2br(htmlspecialchars($plainte['description'])) ?><br>
                    <strong>Solution souhaitée :</strong> <?= nl2br(htmlspecialchars($plainte['solution_souhaitee'])) ?><br>
                    <strong>Anonyme :</strong> <?= $plainte['anonyme'] ? 'Oui' : 'Non' ?><br>
                    <strong>Date :</strong> <?= $plainte['date_soumission'] ?><br><br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>  






