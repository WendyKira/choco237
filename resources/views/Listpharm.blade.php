<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes pharmacies</title>
    <link rel="stylesheet" href="Conspharm.css">
</head>
<body>
    <header>
        <h1> Liste de pharmacies </h1>
        <form action="Accueil" method= "post">
        @csrf 
       <nav>
          <button>Accueil</button>
       </nav>
     </form>
    </header>
    <main>
        <section id="search" class="section">
            <h2>Rechercher une Pharmacie</h2>
            <form id="search-form">
                <input type="text" id="search-input" placeholder="Entrez le nom ou la ville de la pharmacie" required>
                <button type="submit" class="btn">Rechercher</button>
            </form>
        </section>
        
        <section id="pharmacies" class="section">
            <h2>Liste des Pharmacies</h2>
            <div id="pharmacy-list" class="pharmacy-list">
                <div class="pharmacy-item">
                    <h3>Pharmacie</h3>
                    <p><strong>Adresse :</strong> </p>
                    <p><strong>Horaires :</strong> </p>
                </div>
                <div class="pharmacy-item">
                    <h3>Pharmacie</h3>
                    <p><strong>Adresse :</strong> </p>
                    <p><strong>Horaires :</strong> </p>
                </div>
            </div>
        </section>
        
        <section id="contact" class="section">
            <h2>Contact</h2>
            <p>Pour toute question ou assistance, veuillez nous contacter.</p>
            <form id="contact-form">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; CAMPHARM </p>
    </footer>
</body>
</html>
