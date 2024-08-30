<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<div class="container d-flex flex-column align-items-center justify-content-center vh-100">
        <div class="logo-container mb-4">
            <svg class="pharmacy-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <rect class="cross" x="20" y="40" width="60" height="20"/>
                <rect class="cross" x="40" y="20" width="20" height="60"/>
            </svg>
            <h1 class="logo-text">MARQUISE</h1>
  </div>
    <div class="container">
        <h1>Conectez-vous à votre compte</h1>
        <form action="dashboard.html" method="post">
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <label for="password">Confirmer votre mot de passe :</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit"><a href="Accueil">Se connecter</a></button>
        </form>
        <p>Avez-vous un compte ? <a href="Inscription">Creez votre compte ici</a></p>
    </div>
</body>
</html>
