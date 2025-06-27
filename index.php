<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Gestion des Plaintes</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hero {
            background: rgba(0, 0, 0, 0.6);
            padding: 50px;
            border-radius: 15px;
            margin: 100px auto;
            max-width: 800px;
            color: white;
        }
        
        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
            flex-wrap: wrap;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            margin: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1>Plateforme de Gestion des Plaintes Scolaires</h1>
            <p>Un système sécurisé et anonyme pour exprimer vos préoccupations</p>
            
            <div class="cta-buttons">
                <a class="btn" href="register.html">S'inscrire</a>
                <a class="btn" href="login.php">Se connecter</a>
                <a class="btn" href="about.html">À propos</a>
            </div>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <h3>Anonymat Garanti</h3>
                <p>Vos plaintes sont traitées de manière totalement anonyme</p>
            </div>
            <div class="feature-card">
                <h3>Sécurisé</h3>
                <p>Protection maximale de vos données personnelles</p>
            </div>
            <div class="feature-card">
                <h3>Rapide</h3>
                <p>Déposez une plainte en moins de 2 minutes</p>
            </div>
        </div>
    </div>
</body>
</html>