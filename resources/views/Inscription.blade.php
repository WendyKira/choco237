<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <form action="Accueil" method= "post">
        @csrf 
    <div class="container">
        <h1>Inscription</h1>
        <form action="carte" method="post">
          @csrf
            <div class="form-group">
                <label for="fullName">Nom :</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="fullName">Prenom :</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer le mot de passe :</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit">S'inscrire</button>
            <p>Vous avez deja un compte ? <a href="Login"> Se connecter</a></p>
            <p>Etes vous receptionniste ? <a href="pagerecep"> Se connecter</a></p>
        </form>
    </div>

    <script src="inscription.js"></script>
</body>
</html>
