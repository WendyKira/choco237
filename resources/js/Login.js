document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire pour la validation côté client

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;

    if (username === '' || password === '') {
        document.getElementById('error-message').textContent = 'Tous les champs sont obligatoires.';
    } else if (password.length < 6) {
        document.getElementById('error-message').textContent = 'Le mot de passe doit comporter au moins 6 caractères.';
    } else {
        // Ici vous pourriez envoyer les données du formulaire à un serveur
        // Pour la démonstration, nous affichons un message de succès
        document.getElementById('error-message').textContent = '';
        alert('Connexion réussie!');
        // Réinitialiser le formulaire après soumission réussie
        document.getElementById('loginForm').reset();
    }
});
