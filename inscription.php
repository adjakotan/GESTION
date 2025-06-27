<?php
session_start();
require 'base_donnees.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO utilisateurs (prenom, nom, email, mot_de_passe) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$prenom, $nom, $email, $mot_de_passe]);

        // Connecter automatiquement l'utilisateur
        $user_id = $conn->lastInsertId();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $prenom;

        header('Location: plainte.php'); // Redirection vers la page de plainte
        exit();
    } catch (PDOException $e) {
        error_log("Erreur lors de l'inscription: " . $e->getMessage());
        echo "Une erreur est survenue lors de votre inscription. Veuillez réessayer.";
    }
}
?>