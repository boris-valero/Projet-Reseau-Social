# Réseau Social PHP

## Description

Ce projet est un réseau social simple permettant aux utilisateurs de s'inscrire, de se connecter, de publier des messages, de suivre d'autres utilisateurs, et d'interagir avec les publications via des likes et des tags.

## Fonctionnalités

- **Inscription et Connexion** : Les utilisateurs peuvent créer un compte et se connecter pour accéder aux fonctionnalités du réseau social.
- **Publication de Messages** : Les utilisateurs peuvent publier des messages et les taguer.
- **Suivi des Utilisateurs** : Les utilisateurs peuvent suivre d'autres utilisateurs et voir leurs publications dans leur fil d'actualité.
- **Likes** : Les utilisateurs peuvent aimer les publications.
- **Tags** : Les publications peuvent être taguées et les utilisateurs peuvent cliquer sur les tags pour voir les publications associées.

## Structure du Projet

Voici un aperçu des fichiers principaux du projet :

- `admin.php` : Page d'administration pour gérer les utilisateurs et les publications.
- `feed.php` : Fil d'actualité affichant les publications des utilisateurs suivis.
- `followers.php` : Page affichant les suiveurs d'un utilisateur.
- `include.php` : Fichier d'inclusion pour la connexion à la base de données.
- `inscription.php` : Page d'inscription des utilisateurs.
- `login.php` : Page de connexion des utilisateurs.
- `news.php` : Page affichant les nouvelles publications.
- `process.php` : Script de traitement des formulaires d'inscription et de connexion.
- `registration.php` : Page de formulaire d'inscription.
- `settings.php` : Page de paramètres utilisateur.
- `subscriptions.php` : Page affichant les abonnements d'un utilisateur.
- `tags.php` : Page affichant les publications associées à un tag.
- `usurpedpost.php` : Page de gestion des publications usurpées.
- `wall.php` : Mur d'un utilisateur affichant ses publications.
- `main.css` et `style.css` : Fichiers de style CSS.
- `Niveau1.sql` et `Niveau2.sql` : Scripts SQL pour la création de la base de données.

## Installation

1. Clonez le dépôt GitHub :
   ```sh
   git clone https://github.com/adatechschool/projet-collectif-reseau-social-php-projet-collectif-emilio-boris-manon.git
   ```
2. Importez les fichiers SQL ([Niveau1.sql](Niveau1.sql) et [Niveau2.sql](Niveau2.sql)) dans votre base de données MySQL.
3. Configurez les paramètres de connexion à la base de données dans [include.php](include.php) et [process.php](process.php).
4. Lancez un serveur local (par exemple, avec XAMPP ou WAMP) et accédez au projet via votre navigateur.
