<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide</title>
    <link rel="stylesheet" href="Guide.css">
</head>
<body>
    <header>
        <h1>Guide d'utilisation pour les clients de la pharmacie</h1>
     <form action="Accueil" method= "post">
        @csrf 
       <nav>
          <button>Accueil</button>
       </nav>
     </form>
    </header>

    <main> 
        <section id="introduction">
            <h2>Introduction</h2>
            <p>Bienvenue dans notre guide d'utilisation destiné aux clients de notre application. Ce guide vous aidera à comprendre les fonctionnalités de l'application qui vous sont destinés.</p>
        </section>

        <section id="services">
            <h2>Services</h2>
            <p>Notre application offre une variété de services pour répondre à vos besoins :</p>
            <ul>
                <li><strong>Conseils médicaux</strong> - Nos pharmaciens sont disponibles pour vous fournir des conseils sur les médicaments et les traitements.</li>
                <li><strong>Vente de médicaments</strong> - Nous proposons une large gamme de médicaments sur ordonnance et en vente libre.</li>
                <li><strong>Préparation de prescriptions</strong> - Nous préparons vos prescriptions médicales avec soin.</li>
                <li><strong>Suivi de traitements</strong> - Nous offrons des services de suivi pour vous aider à gérer vos traitements.</li>
            </ul>
        </section>

        <section id="commandes">
            <h2>Passer une commande</h2>
            <p>Pour passer une commande, suivez ces étapes :</p>
            <ol>
                <li>Visitez notre site web ou rendez-vous directement à la pharmacie.</li>
                <li>Recherchez les médicaments ou produits dont vous avez besoin.</li>
                <li>Ajoutez les articles à votre panier.</li>
                <li>Finalisez votre commande en fournissant vos informations personnelles et votre mode de paiement.</li>
                <li>Recevez une confirmation de votre commande par e-mail ou SMS.</li>
            </ol>
        </section>

        <section id="historique">
            <h2>Consulter l'historique des achats</h2>
            <p>Pour consulter votre historique d'achats :</p>
            <ol>
                <li>Connectez-vous à votre compte sur notre site web.</li>
                <li>Accédez à la section "Historique des achats" depuis votre tableau de bord.</li>
                <li>Vous pourrez visualiser vos commandes passées et les détails associés.</li>
            </ol>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Pour toute question ou assistance, vous pouvez nous contacter :</p>
            <ul>
                <li><strong>Téléphone :</strong> 658547634 </li>
                <li><strong>Email :</strong> wendynnama25@gmail.com </li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; CAMPHARM </p>
    </footer>
</body>
</html>
