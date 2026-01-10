Authentification
Projet Laravel pour implémenter un système d’authentification des utilisateurs.
Il peut être utilisé comme base pour des applications web nécessitant une gestion sécurisée des comptes.
Fonctionnalités
Inscription des utilisateurs
Connexion et déconnexion
Gestion des sessions
Protection des routes via middleware
Technologies utilisées
PHP
Laravel
Blade
MySQL
Installation
Cloner le projet :
git clone https://github.com/zakariafl27/Authentification.git
cd Authentification
Installer les dépendances :
composer install
npm install
npm run dev
Configuration :
Copier .env.example vers .env
Configurer la base de données
php artisan key:generate
Lancer les migrations et le serveur :
php artisan migrate
php artisan serve
Utilisation
Accéder à /register pour créer un compte
Accéder à /login pour se connecter
Les pages protégées nécessitent une authentification
Auteur
Zakaria FLAFI
Licence
MIT
