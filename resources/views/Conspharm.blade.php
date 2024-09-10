<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter les Pharmacies</title>
    <link rel="stylesheet" href="Conspharm.css">
</head>
<body>
    <header>
        <h1>Consultez les Pharmacies</h1>
        <nav>
        <form action="Accueil" method= "post">
        @csrf 
           <button> Accueil </button>
        <form>
            <a href="Listpharm" class="nav-link"></a>
            <a href="Listprod" class="nav-link"> </a>
            <a href="Ordonnace" class="nav-link"></a>
            <a href="Commander" class="nav-link"></a>
        </nav>
    </header>

    <footer>
        <p>&copy; CAMPHARM </p>
    </footer>

</body>
</html>
    