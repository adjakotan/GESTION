<?php
session_start();
require 'base_donnees.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'], $_POST['mot_de_passe'])) {
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        $sql = "SELECT * FROM utilisateurs WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['prenom'];
            header('Location: plainte.php'); // Redirection vers la page de plainte
            exit;
        } else {
            header('Location: login.php?error=1');
            exit;
        }
    } else {
        header('Location: login.php?error=2');
        exit;
    }
}
?>