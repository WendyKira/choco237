<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
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
    <form action="">
        <h4>INSCRIPTION</h4>
        <hr>
        <div class="name-field">
            <div>
                <label>Nom</label>
                <input type="text">
            </div>
            <div>
                <label>Prenom</label>
                <input type="text">
            </div>
        </div>
            <label>Adresse Mail</label>
            <input type="email">
            <label>Mot de passe</label>
            <input type="password">
            <a href="Accueil">
            <input type="submit" value="S'inscrire">
            <a>
            <p>Vous avez deja un compte ? <a href="Login"> Se connecter</a></p>
   </form>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
