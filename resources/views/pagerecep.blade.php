<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Utilisateur</title>
    <link rel="stylesheet" href="pagerecep.css">
</head>
<body>
<div class="container d-flex flex-column align-items-center justify-content-center vh-100">
        <div class="logo-container mb-4">
            <svg class="pharmacy-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <rect class="cross" x="20" y="40" width="60" height="20"/>
                <rect class="cross" x="40" y="20" width="20" height="60"/>
            </svg>
            <h1 class="logo-text"> CAMPHARM </h1>
  </div>
    <div class="login-container">
        <h1>Connexion</h1>
        <form action="Accueilrecep" method="post">
            @csrf
            <label for="password">Votre code</label>
            <input type="password" id="password" name="password" placeholder="********" required>
            
            <button type="submit">Se connecter</button>
            
            <div class="forgot-code">
            <p> Vous n'etes pas receptionniste ? <a href="Inscription"> Retour </a></p>
            </div>
        </form>
    </div>
</body>
</html>
