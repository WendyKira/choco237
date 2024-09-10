document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire pour la validation côté client

    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (fullName === '' || email === '' || password === '' || confirmPassword === '') {
        document.getElementById('error-message').textContent = 'Tous les champs sont obligatoires.';
    } else if (password.length < 6) {
        document.getElementById('error-message').textContent = 'Le mot de passe doit comporter au moins 6 caractères.';
    } else if (password !== confirmPassword) {
        document.getElementById('error-message').textContent = 'Les mots de passe ne correspondent pas.';
    } else {
        // Ici vous pourriez envoyer les données du formulaire à un serveur
        // Pour la démonstration, nous affichons un message de succès
        document.getElementById('error-message').textContent = '';
        alert('Inscription réussie !');
        // Réinitialiser le formulaire après soumission réussie
        document.getElementById('signupForm').reset();
    }
});
