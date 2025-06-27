<?php
require 'base_donnees.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $sujet = $_POST['sujet'];
        $description = $_POST['description'];
        $solution = $_POST['solution'] ?? '';
        $anonyme = isset($_POST['anonyme']) ? 1 : 0;

        $sql = "INSERT INTO plaintes (sujet, description, solution_souhaitee, anonyme) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$sujet, $description, $solution, $anonyme]);

        echo "Votre plainte a été soumise avec succès ! <a href='index.html'>Retour à l'accueil</a>";
    } catch (PDOException $e) {
        error_log("Erreur lors de l'enregistrement de la plainte: " . $e->getMessage());
        echo "Une erreur est survenue lors de l'enregistrement de votre plainte. Veuillez réessayer.";
    }
}
?>