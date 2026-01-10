# Système d'Authentification Laravel

Projet Laravel pour implémenter un système d'authentification des utilisateurs. Il peut être utilisé comme base pour des applications web nécessitant une gestion sécurisée des comptes.

## Fonctionnalités

- Inscription des utilisateurs
- Connexion et déconnexion
- Gestion des sessions
- Protection des routes via middleware
- Validation des données
- Hash sécurisé des mots de passe

## Technologies Utilisées

- PHP 8.2+
- Laravel 11.x
- Blade
- MySQL

## Installation

Cloner le projet :

```bash
git clone https://github.com/zakariafl27/Authentification.git
cd Authentification
```

Installer les dépendances :

```bash
composer install
npm install
npm run dev
```

Configuration :

```bash
cp .env.example .env
php artisan key:generate
```

Configurer la base de données dans `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

Lancer les migrations et le serveur :

```bash
php artisan migrate
php artisan serve
```

## Utilisation

- Accéder à `/register` pour créer un compte
- Accéder à `/login` pour se connecter
- Les pages protégées nécessitent une authentification

## Structure

```
app/
├── Http/Controllers/AuthController/    # Contrôleurs d'authentification
├── Models/User.php           # Modèle utilisateur
resources/views/auth/         # Vues login/register
routes/web.php                # Routes
```

## Sécurité

- Protection CSRF
- Hash bcrypt pour les mots de passe
- Validation des entrées
- Prévention des injections SQL

## Auteur

**Zakaria FLAFLI**
- GitHub: [@zakariafl27](https://github.com/zakariafl27)

## Licence

MIT
