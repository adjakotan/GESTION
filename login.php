<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-connexion">
    <div class="form-container">
        <h2>Connexion</h2>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error">
                <?php if ($_GET['error'] == 1): ?>
                    Email ou mot de passe incorrect
                <?php elseif ($_GET['error'] == 2): ?>
                    Veuillez remplir tous les champs
                <?php endif; ?>
            </div>
        <?php endif; ?>
        
        <form action="connexion.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
            <button type="submit" class="btn">Se connecter</button> 
            <a href="index.html">Retour à l'accueil</a> 
        </form> 
    </div>
</body>
</html>