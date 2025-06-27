<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require 'base_donnees.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Déposer une plainte</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .welcome-message {
            text-align: right;
            padding: 10px 20px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .nav-links {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body class="page-plainte">
    <div class="welcome-message">
        Bonjour, <?php echo htmlspecialchars($_SESSION['user_name']); ?> !
    </div>
    
    <div class="plainte">
        <h2>Déposer une plainte</h2>
        
        <form action="enregistrer_plainte.php" method="post">
            <input type="text" name="sujet" placeholder="Sujet" required><br>
            <textarea name="description" placeholder="Détaillez votre plainte" rows="5" required></textarea><br>
            <textarea name="solution" placeholder="Solution souhaitée" rows="3"></textarea><br>
            <label>
                <input type="checkbox" name="anonyme" checked> Plainte anonyme
            </label><br>
            <button type="submit" class="btn">Envoyer la plainte</button>
            
            <div class="nav-links">
                <a href="index.php">Accueil</a>
                <a href="deconnexion.php">Déconnexion</a>
            </div>
        </form>
    </div>
</body>
</html>