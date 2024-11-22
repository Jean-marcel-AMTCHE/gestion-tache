# Application de Gestion des Tâches

Cette application Laravel permet aux utilisateurs authentifiés de gérer leurs tâches personnelles.

## Installation

1. Clonez ce dépôt
2. Exécutez `composer install`
3. Copiez `.env.example` vers `.env` et configurez votre base de données
4. Exécutez `php artisan key:generate`
5. Exécutez `php artisan migrate`
6. Exécutez `npm install && npm run dev`

## Utilisation

1. Lancez le serveur avec `php artisan serve`
2. Accédez à l'application via `http://localhost:8000`

## Comptes de test

- Utilisateur 1 : jeanmarcel774@gmail.com / 123AJMjm 
- Utilisateur 2 : angeboris@gmail.com / YAb12345

## Fonctionnalités

- Authentification des utilisateurs
- Création, modification et suppression de tâches
- Affichage de la liste des tâches
- Marquage des tâches comme terminées
- Filtrage des tâches par priorité et statut